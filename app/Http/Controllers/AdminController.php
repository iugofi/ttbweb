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

    public function indexpage(){
        return view('Admin.index');
    }


}
