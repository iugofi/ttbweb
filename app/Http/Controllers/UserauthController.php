<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserauthController extends Controller
{
    public function __construct()
    {
        $loggedInUser = session('loggedInUser');
        $user_data = Users::where('id',$loggedInUser)->first();
    }

    public function myprofile(){
      
        if($loggedInUser==true)
        {
            return view('User.myprofile', ['loggedInUser' => $loggedInUser],['user_data' => $user_data]);
        }
        else
        {
            return redirect('/signin');
        }
        
    }
}
