<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Payments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;


class UserauthController extends Controller
{
    protected $loggedInUser;
    protected $userData;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->loggedInUser = session('loggedInUser');

            if ($this->loggedInUser) {
                $this->userData = Users::find($this->loggedInUser);
            }
            return $next($request);
        });
    }

    public function myprofile(){

        if ($this->loggedInUser) {

            $productdetails= Payments::join('product_details', 'payments.product_id', '=', 'product_details.id')
            ->where('payments.user_id', $this->loggedInUser)
            ->select('payments.*','payments.id as id_py', 'product_details.*')
            ->orderby('payments.created_at','desc')
            ->get();

           $user_id_s =$this->loggedInUser;

            $keydetails = DB::table('payments')
            ->select(DB::raw('COUNT(product_details.key_type) as count'), 'product_details.key_type')
            ->join('product_details', 'product_details.id', '=', 'payments.product_id')
            ->where('payments.user_id', $user_id_s)
            ->where('payments.product_key', '!=', 'N/A')
            ->groupBy('product_details.key_type')
            ->first();

            return view('User.myprofile', ['loggedInUser' => $this->loggedInUser, 'user_data' => $this->userData,'productdetails' => $productdetails,'keydetails' => $keydetails]);
        } else {
            return redirect('/signin');
        }

    }
    public function passchangeprifile(Request $request){

        if ($this->loggedInUser) {
            try {
                $id = Crypt::decrypt($request->id_user);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => 400,
                    'messages' => 'Invalid user ID.'
                ]);
            }

            $validator = Validator::make($request->all(), [
                'new_password' => 'required|min:6|max:50',
                'confirm_password' => 'required|min:6|same:new_password'
            ], [
                'confirm_password.same' => 'Password did not match!',
                'confirm_password.required' => 'Confirm Password is required!'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'messages' => $validator->getMessageBag()->toArray()
                ]);
            }
            else
            {
                    $profilepasschange = Users::find($id);
                    if (!$profilepasschange) {
                        return response()->json([
                            'status' => 404,
                            'messages' => 'User Password not found'
                        ]);
                    }
                    $profilepasschange->update([
                        'password' => Crypt::encrypt($request->new_password)

                    ]);





                    return response()->json([
                        'status' => 200,
                        'messages' => 'Password Edit successfully'
                    ]);

                    }

        } else {
            return redirect('/signin');
        }

    }

    public function myprofileother(Request $request){


        if ($this->loggedInUser) {
            // dd($request->all());
            $id=Crypt::decrypt($request->id_user);
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'user_email' => 'required|email|max:255',
                'user_phone' => 'required|digits_between:10,15',
                'user_address' => 'required|max:255',

            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                ]);
            }
            else
            {
                    $profileotherchange = Users::where('id', $id)->first();
                    if (!$profileotherchange) {
                        return response()->json([
                            'status' => 404,
                            'messages' => 'User Profile not found'
                        ]);
                    }


                    if ($request->hasFile('profile_images')) {
                        $image = $request->file('profile_images');
                        $imageName = time() . '.' . $image->getClientOriginalExtension();
                        $image->move('assets/userprofile/', $imageName);

                        // If the user already has a profile image, delete the old one
                        if ($profileotherchange->profile) {
                            $oldImage = 'assets/userprofile/' . $profileotherchange->profile;
                            if (file_exists($oldImage)) {
                                unlink($oldImage);
                            }
                        }
                    } else {
                        return response()->json([
                            'status' => 400,
                            'messages' => 'No image uploaded'
                        ]);
                    }

                    $profileotherchange->update([
                        'firstname' => $request->first_name,
                        'lastname' => $request->last_name,
                        'email' => $request->user_email,
                        'phone' => $request->user_phone,
                        'address' => $request->user_address,
                        'profile' => $imageName,

                    ]);





                    return response()->json([
                        'status' => 200,
                        'messages' => 'Profile Edit successfully'
                    ]);

                    }

        } else {
            return redirect('/signin');
        }

    }
}
