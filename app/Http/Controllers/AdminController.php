<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin; 

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['Adminauth']);
    // }

    
    public function logoutadmin()
    {
        if(session()->has('loggedInAdmin')){
            session()->pull('loggedInAdmin');
            return redirect('/setup');
        }
    }

    public function signdataadmin(Request $request)
    {
       $validator=Validator::make($request->all(),[
        'signin_email' =>'required|max:50',
        'signin_password' =>'required|min:6|max:20'


       ]);
       if($validator->fails())
       {
         return response()->json([
            'status' =>400,
            'messages'=>$validator->getMessageBag()->toArray()
        ]);
       }
       else
       {
        $user = Admin::where('email',$request->signin_email)->first();
        if($user)
        {
            if(Hash::check($request->signin_password, $user->password))
            {
                $request->session()->put('loggedInAdmin',$user->id);
                 return response()->json([
                    'status'=>200,
                    'messages'=>'success'
                 ]);
            }
            else{
                return response()->json([
                    'status'=>401,
                    'messages'=>'E-mail or Password Incarrect!'
                 ]);
            }

        }else{
            return response()->json([
                'status'=>401,
                'messages'=>'User Not Found!'
             ]);
        }
        
       }
    }

    public function indexpage(){
        return view('Admin.index');
    }

}
