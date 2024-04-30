<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserauthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','LoginCheck']);
    }

    public function myprofile(){
      
            return view('User.myprofile', ['loggedInUser' => $loggedInUser],['user_data' => $user_data]);
        
    }
}
