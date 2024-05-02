<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 

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
}
