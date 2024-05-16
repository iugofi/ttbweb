<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserauthController extends Controller
{
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
            return view('User.myprofile', ['loggedInUser' => $this->loggedInUser, 'user_data' => $this->userData]);
        } else {
            return redirect('/signin');
        }
        
    }
    public function passchangeprifile(Request $request){
     
        if ($this->loggedInUser) {
            $id=\Crypt::decrypt($request->id_user);
            $validator = Validator::make($request->all(), [
                'new_password' => 'required|min:6|max:50',
                'confirm_password' => 'required|min:6|same:new_password'
            ],[
                'confirm_password.same' => 'Password did not match!',
                'confirm_password.required' => 'Confirm Password is Required!'
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                ]);
            }
            else
            { 
                    $profilepasschange = Users::where('id', $id)->first();
                    if (!$profilepasschange) {
                        return response()->json([
                            'status' => 404,
                            'messages' => 'Admin not found'
                        ]);
                    }      
                    $profilepasschange->update([
                        'password' => \Crypt::encrypt($request->confirm_password)
                       
                    ]);
    
                   
                    
                    
    
                    return response()->json([
                        'status' => 200,
                        'messages' => 'Admin Edit successfully'
                    ]);
    
                    }

        } else {
            return redirect('/signin');
        }
        
    }
}
