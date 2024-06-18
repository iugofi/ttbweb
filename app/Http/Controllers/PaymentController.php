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

    public function otpcheckfpay(Request $request)
    {
     $validator = Validator::make($request->all(), [
     'email' => 'required|email',   
     'first_name' => 'required', 
     'last_name' => 'required', 
     
         ]);
 
         if ($validator->fails()) {
             return response()->json([
                 'status' => 400,
                 'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
             ]);
         } else {
             $user = Users::where('email', $request->email)->first();
             $otp = rand(100000, 999999); 
     
             if (!$user) {
                 $request->session()->put('emailsessiontb', $request->email);
                 $user = new Usersell();
                 $user->email = $request->email;
                 $user->firstname = ucfirst($request->first_name);
                 $user->lastname = ucfirst($request->last_name);
                 $user->otp = $otp;
                 $user->save();
             } else {
                 // Update existing user's OTP
                 $request->session()->put('emailsessiontb', $request->email);
                 $user->otp = $otp;
                 $user->save();
             }
     
             // Send OTP
             $this->sendOTP($request->email, $otp);
            
             return response()->json([
                 'status' => 200,
                 'messages' => 'Contact Form Data Sent successfully'
             ]);
         }
    }
}
