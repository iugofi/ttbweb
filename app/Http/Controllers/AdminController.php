<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin; 

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->loggedInAdmin = session('loggedInAdmin');
            // dd($this->loggedInAdmin);
            if ($this->loggedInAdmin) {
                $this->adminData = Admin::find($this->loggedInAdmin);
            }
            return $next($request);
        });
    }

    public function indexpage(){
        if ($this->loggedInAdmin) {
        return view('Admin.index');
        } else {
            return redirect('/setup');
        }
    }


}
