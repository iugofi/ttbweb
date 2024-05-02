<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 

class UserauthController extends Controller
{
    public function __construct()
    {
       
    }

    public function myprofile(){
        $loggedInUser = session('loggedInUser');
        $user_data = Users::where('id',$loggedInUser)->first();
        
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
