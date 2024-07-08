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
                 $user = new Users();
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
    public function otpverifyfpay(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'otpinput' => 'required|digits:6',
       ]);
   
       if ($validator->fails()) {
           return response()->json([
               'status' => 400,
               'errors' => $validator->errors()->toArray()
           ]);
       }
   
       $user = Users::where('email', $request->emailinput)
                       ->where('otp', $request->otpinput)
                       ->first();
   
       if ($user) {
           return response()->json([
               'status' => 200,
               'message' => 'OTP verified successfully'
           ]);
       } else {
           return response()->json([
               'status' => 401,
               'message' => 'Invalid OTP'
           ]);
       }
   }

   public function sendOTP($email, $otp) {
        
    Mail::send('Mail.otp', ['otp' => $otp], function ($message) use ($email) {
        $message->to($email)->subject('Your OTP');
    });

   }

   public function stripeCheckoutfpay(Request $request)
    {
        $vid=encrypt($request->vpnid);

        // $vpnshield = DB::table('vpnshield')
        // ->join('storepick', 'storepick.PICK_ID', '=', 'vpnshield.plan_name')
        // ->select('vpnshield.id', 'storepick.PICK_TEXT as name', 'vpnshield.price','vpnshield.price', 'vpnshield.is_coupons', 'vpnshield.coupons', DB::raw('(vpnshield.price)/12 AS monthlyprice'))
        // ->where('storepick.STORE_ID','=','plan_name')
        // ->where('vpnshield.id',decrypt($vid))
        // ->first();


        $vpnshield = DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->where('storepick.STORE_ID','=','key_type')
        ->where('product_details.id',decrypt($vid))
        ->first();

        

    $stripe = new \Stripe\StripeClient('sk_test_51Oetf6SHWK0fmSdmYx9rUwrdAgJdSQi5NpurLOaBuCHTcF7gm4o3VKPwbMWIrKE5twgHUqckdKZFJ3GzqNoXxsZD00zZGoUyuF');


    $allowPromotionCodes = $vpnshield->is_coupons ? true : false;
   
    $response=$stripe->checkout->sessions->create([
    'line_items' => [
        [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => ['name' => $vpnshield->name],
            'unit_amount' => $vpnshield->price*100,
            
        
        ],
        'quantity' => 1,
        ],
    ],
    
      'mode' => 'payment',
     'customer_email' =>$request->emailpay,
     'allow_promotion_codes' => $allowPromotionCodes,
    //  'allow_promotion_codes' => true,
    // 'discounts' => [['coupon' => 'free_period']],

    'success_url' => route('user.successpay', ['vid' => $vid]) . '?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => route('user.cancelpay'),
    ]);

   

    //  dd($response);


    if(isset($response->id) && $response->id !=''){
        return redirect($response->url);
    }
    else{
        return redirect()->route('user.cancelpay');
    }

    }


    public function successpay(Request $request)
    {

        if(isset($request->session_id) && isset($request->vid))
    {
            $session_id = $request->session_id;
            $vid = decrypt($request->vid);
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $response=$stripe->checkout->sessions->retrieve($request->session_id);
            // dd($response->status);
            $pay_id=$response->payment_intent;
            $emailcust=$response->customer_email;
            $user_id = Users::where('email', $emailcust)
            ->first();


            $getkey = TTBKEY::where('product_id', $vid)->where('is_key_used', 0)->orderBy('created_at', 'ASC')->limit(1)->first();
            if ($getkey) {
                $getkey->is_key_used = 1;
                $main_key = $getkey->main_key;
                $getkey->save();


                Mail::send('Mail.sendkey', ['main_key' => $main_key, 'payment_intent' => $pay_id], function ($message) use ($response) {
                    $message->to($response->customer_email)->subject('TTB Internet Security Vpn Key');
                });

            } else {
                // Default main key value when no product key is available
                $main_key = 'N/A';
                $not_send_key=new Get_not_send_key();
                $not_send_key->user_id = $user_id ? $user_id->id : null;
                $not_send_key->session_id = $response->id;
                $not_send_key->pay_id = $pay_id;
                $not_send_key->product_id = $vid;
                $not_send_key->status=0;
                $not_send_key->save();
            }

            $payment = new Payments();
            $payment->user_id = $user_id ? $user_id->id : null;
            $payment->session_id = $response->id;
            $payment->pay_id = $pay_id;
            $payment->product_id = $vid;
            $payment->amount_total = $response->amount_total / 100;
            $payment->currency = $response->currency;
            $payment->payment_status = $response->payment_status;
            $payment->payment_method_types = json_encode($response->payment_method_types);
            $payment->customer_name = $response->customer_details->name;
            $payment->customer_phone = $response->customer_details->phone;
            $payment->livemode = $response->livemode;
            $payment->country = $response->customer_details->address->country;
            $payment->state = $response->customer_details->address->state;
            $payment->city = $response->customer_details->address->city;
            $payment->line1 = $response->customer_details->address->line1;
            $payment->line2 = $response->customer_details->address->line2;
            $payment->postal_code = $response->customer_details->address->postal_code;
            $payment->product_key = $main_key;
            $payment->save();

            if ($main_key !== 'N/A' && $pay_id) {
                Mail::send('Mail.sendkey', ['main_key' => $main_key, 'payment_intent' => $pay_id], function ($message) use ($response) {
                    $message->to($response->customer_email)->subject('TTB Internet Security Vpn Key');
                });
            } else {
                Mail::send('Mail.fail', ['customer_email'=>$response->customer_email], function ($message) use ($response) {
                    $message->to("kunal.iugofi@gmail.com")->subject('TTB Internet Security Vpn Key - Failed');
                });
            }

            return redirect()->route('user.success');

            }else
            {
                return redirect()->route('user.cancel');
            }
    }

    public function cancelpay()
    {
        return view('User.cancelpay');
    }

    public function success()
    {
        return view('User.success');
    }

    

    public function testpagenew($session_id)
    {
        // dd("kk");
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
        $response=$stripe->checkout->sessions->retrieve($session_id);
        dd($response);
    }
   
}
