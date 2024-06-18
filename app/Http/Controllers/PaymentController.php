<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planname; 
use App\Models\VpnShield;
use App\Models\TTBKEY;
use App\Models\Payments;
use App\Models\Get_not_send_key;
use App\Models\Users; 
// use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Validator;
use Stripe;
use DB;
use Mail;


class PaymentController extends Controller
{
    public function fpayitem($encryptedId)
    {
        $id = decrypt($encryptedId);
        $plan=DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->select('product_details.id', 'planname.name as name' , 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
        ->where('storepick.STORE_ID','=','key_type')
        ->where('product_details.id',$id)
        ->first();
        
        return view('User.checkout_page',['plan'=>$plan]);

        
    }
}
