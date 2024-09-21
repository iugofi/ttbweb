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

    public function myprofile()
    {

        if ($this->loggedInUser) {
            // DB::enableQueryLog();
            $productdetails = DB::table('ttb_key_assign AS tka')
            ->leftJoin('payments1 AS p', 'p.id', '=', 'tka.payment_id')
            ->leftJoin('ttbkey AS tk', 'tk.id', '=', 'tka.main_key')
            ->leftJoin('product_details AS pd', 'pd.id', '=', 'p.product_id')
            ->leftJoin('planname AS pn', 'pn.plan_id', '=', 'pd.plan_id')
            ->leftJoin('storepick AS s', 's.PICK_ID', '=', 'pd.key_type')
            ->select('s.PICK_TEXT AS product_name', 'p.transaction_id AS invoice_id', 'p.price AS amount_total', 'p.payment_time', 'p.order_id AS order_id', 'p.payment_status AS payment_status')
            ->where('tka.id', 2854)
            ->where('s.STORE_ID', 'key_type')
            ->get();
                // $query = DB::getQueryLog($productdetails);
                // dd($query);

            $user_id_s = $this->loggedInUser;
        // DB::enableQueryLog();
            $keydetails = DB::table('payments')
            ->select('storepick.PICK_TEXT', DB::raw('COUNT(product_id) AS TotalCount'))
            ->join('product_details', 'product_details.id', '=', 'payments.product_id')
            ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
            ->where('payments.user_id', $user_id_s)
            ->where('storepick.STORE_ID', '=', 'key_type') // Assuming $key_type is a variable, otherwise use a string 'key_type'
            ->groupBy('product_details.key_type', 'storepick.PICK_TEXT')
            ->get();


                // $query = DB::getQueryLog($keydetails);
                // dd($query);


            $profileCompletion = $this->userData->getProfileCompletionPercentage();

            return view('User.myprofile', ['loggedInUser' => $this->loggedInUser,'profileCompletion' =>$profileCompletion,'user_data' => $this->userData, 'productdetails' => $productdetails, 'keydetails' => $keydetails]);
        } else {
            return redirect('/signin');
        }
    }
    public function passchangeprifile(Request $request)
    {

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
            } else {
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

    public function myprofileother(Request $request)
{
    if ($this->loggedInUser) {
        $id = Crypt::decrypt($request->id_user);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'user_phone' => 'nullable|digits_between:10,15',
            'user_address' => 'max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray()
            ]);
        } else {
            $profileotherchange = Users::where('id', $id)->first();
            if (!$profileotherchange) {
                return response()->json([
                    'status' => 404,
                    'messages' => 'User Profile not found'
                ]);
            }

            $imageName = $profileotherchange->profile; // Retain the old image name by default
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
            }

            $profileotherchange->update([
                'firstname' => $request->first_name,
                'lastname' => $request->last_name,
                // 'email' => $request->user_email,
                'phone' => $request->user_phone,
                'address' => $request->user_address,
                'profile' => $imageName,
            ]);

            return response()->json([
                'status' => 200,
                'messages' => 'Profile edited successfully'
            ]);
        }
    } else {
        return redirect('/signin');
    }
}

}
