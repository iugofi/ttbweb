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
use Carbon\Carbon;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Stripe;
use DB;
use Mail;


class PaymentController extends Controller
{
    // public function fpayitem($encryptedId)
    // {
    //     $id = decrypt($encryptedId);
    //     $plan = DB::table('product_details')
    //         ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
    //         ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
    //         ->select('product_details.id', 'planname.name as name', 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
    //         ->where('storepick.STORE_ID', '=', 'key_type')
    //         ->where('product_details.id', $id)
    //         ->first();

    //     return view('User.checkout_page', ['plan' => $plan]);
    // }

    public function fpayitem($encryptedId)
    {
        // dd($encryptedId);
        $id = decrypt($encryptedId);
        Session::forget('firststap');
        Session::forget('user_data');
        $plan = Helpers::getPlanDetails($id);
        $sessionData = [
            'product_id' => $plan->id,
            'description' => $plan->name,
            'price' => $plan->price,
            'discount' => $plan->discount,
            'coupons' => $plan->coupons,
        ];
        Session::put('user_data', $sessionData);
        // dd(Session::get('user_data'));

        // dd($plan);
        return view('User.checkout_page_new', ['plan' => $plan, 'id_on' => $id]);
    }
    public function fpayitem1($id_on)
{
    // dd(Session::get('user_data'));
    $user_data = Session::get('user_data');

    if (isset($user_data['tab1']) && $user_data['tab1'] == 'firstpay1') {
        $id = decrypt($id_on);
        $plan = Helpers::getPlanDetails($id);

        return view('User.tabs.personal-details', ['plan' => $plan, 'id_on' => $id]);
    } else {
        return redirect()->route('user.fpay', ['id' => $id_on])->with('error', 'Access denied. Please complete the previous steps first.');;
    }
}

    public function fpayitem2($id_on)
    {

        // dd(Session::get('user_data'));

        $user_data = Session::get('user_data');
        // dd($user_data['product_id']);
        if (isset($user_data['tab2']) && $user_data['tab2'] == 'firstpay2' && $user_data['tab1'] == 'firstpay1') {
        $id = decrypt($id_on);
        $plan = Helpers::getPlanDetails($id);
        return view('User.tabs.payment', ['plan' => $plan, 'id_on' => $id]);
    } else {
        return redirect()->route('user.fpay1', ['id' => $id_on])->with('error', 'Access denied. Please complete the previous steps first.');;
    }
    }
    public function fpayitem3($id_on)
    {
        // dd(Session::get('user_data'));
        $user_data = Session::get('user_data');
        if (isset($user_data['tab3']) && $user_data['tab3'] == 'firstpay3' && $user_data['tab2'] == 'firstpay2' && $user_data['tab1'] == 'firstpay1') {
        Session::forget('user_data');
        $id = decrypt($id_on);
        $plan = Helpers::getPlanDetails($id);
        return view('User.tabs.confirmation', ['plan' => $plan, 'id_on' => $id]);
    } else {
        return redirect()->route('user.fpay2', ['id' => $id_on])->with('error', 'Access denied. Please complete the previous steps first.');;
    }
    }



    public function otpcheckfpay(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required_without:hidden_first_name',
            'last_name' => 'required_without:hidden_last_name',

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
                $user->firstname = ucfirst($request->input('first_name') ?: $request->input('hidden_first_name'));
                $user->lastname = ucfirst($request->input('last_name') ?: $request->input('hidden_last_name'));
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

    public function sendOTP($email, $otp)
    {

        Mail::send('Mail.otp', ['otp' => $otp], function ($message) use ($email) {
            $message->to($email)->subject('Your OTP');
        });
    }

    public function stripeCheckoutfpay(Request $request)
    {
        $vid = encrypt($request->vpnid);

        // $vpnshield = DB::table('vpnshield')
        // ->join('storepick', 'storepick.PICK_ID', '=', 'vpnshield.plan_name')
        // ->select('vpnshield.id', 'storepick.PICK_TEXT as name', 'vpnshield.price','vpnshield.price', 'vpnshield.is_coupons', 'vpnshield.coupons', DB::raw('(vpnshield.price)/12 AS monthlyprice'))
        // ->where('storepick.STORE_ID','=','plan_name')
        // ->where('vpnshield.id',decrypt($vid))
        // ->first();


        $vpnshield = DB::table('product_details')
            ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
            ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
            ->where('storepick.STORE_ID', '=', 'key_type')
            ->where('product_details.id', decrypt($vid))
            ->first();



        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));


        $allowPromotionCodes = $vpnshield->is_coupons ? true : false;

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => ['name' => $vpnshield->name],
                        'unit_amount' => $vpnshield->price * 100,


                    ],
                    'quantity' => 1,
                ],
            ],

            'mode' => 'payment',
            'customer_email' => $request->emailpay,
            'allow_promotion_codes' => $allowPromotionCodes,
            //  'allow_promotion_codes' => true,
            // 'discounts' => [['coupon' => 'free_period']],

            'success_url' => route('user.successpay', ['vid' => $vid]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('user.cancelpay'),
        ]);



        //  dd($response);


        if (isset($response->id) && $response->id != '') {
            return redirect($response->url);
        } else {
            return redirect()->route('user.cancelpay');
        }
    }


    public function successpay(Request $request)
    {

        if (isset($request->session_id) && isset($request->vid)) {
            $session_id = $request->session_id;
            $vid = decrypt($request->vid);
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $response = $stripe->checkout->sessions->retrieve($request->session_id);
            // dd($response->status);
            $pay_id = $response->payment_intent;
            $emailcust = $response->customer_email;
            $user_id = Users::where('email', $emailcust)
                ->first();


            $getkey = TTBKEY::where('product_id', $vid)
                ->where('is_key_used', 0)
                ->orderBy('created_at', 'ASC')
                ->limit(1)
                ->first();

            if ($getkey) {
                $getkey->is_key_used = 1;
                $getkey->key_activation_date = Carbon::now();

                $plan_id_get = DB::table('product_details')
                    ->select('plan_id')
                    ->where('id', $vid)
                    ->first();

                if (isset($plan_id_get->plan_id)) {
                    switch ($plan_id_get->plan_id) {
                        case 601:
                            $getkey->key_expirey_date = Carbon::now()->addMonths(1);
                            break;
                        case 602:
                            $getkey->key_expirey_date = Carbon::now()->addYear();
                            break;
                        case 603:
                        case 604:
                        case 605:
                            $getkey->key_expirey_date = Carbon::now()->addYear();
                            break;
                        default:
                            // Handle other cases or set a default expiry date if needed
                            $getkey->key_expirey_date = Carbon::now();
                            break;
                    }

                    $id_key = $getkey->id;
                    $main_key = $getkey->main_key;
                    $getkey->save();

                    // Uncomment and update the mail logic if needed
                    /*
        Mail::send('Mail.sendkey', ['main_key' => $id_key, 'payment_intent' => $pay_id], function ($message) use ($response) {
            $message->to($response->customer_email)->subject('TTB Internet Security Vpn Key');
        });
        */
                } else {
                    // Default main key value when no product key is available
                    $id_key = 'N/A';
                    $not_send_key = new Get_not_send_key();
                    $not_send_key->user_id = $user_id ? $user_id->id : null;
                    $not_send_key->session_id = $response->id;
                    $not_send_key->pay_id = $pay_id;
                    $not_send_key->product_id = $vid;
                    $not_send_key->status = 0;
                    $not_send_key->save();
                }
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
            $payment->product_key = $id_key;
            $payment->save();

            if ($id_key !== 'N/A' && $pay_id) {
                Mail::send('Mail.sendkey', ['id_key' => $id_key, 'payment_intent' => $pay_id], function ($message) use ($response) {
                    $message->to($response->customer_email)->subject('TTB Internet Security');
                });
            } else {
                Mail::send('Mail.fail', ['customer_email' => $response->customer_email], function ($message) use ($response) {
                    $message->to("kunal.iugofi@gmail.com")->subject('TTB Internet Security - Failed');
                });
            }

            return redirect()->route('user.success');
        } else {
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
        $response = $stripe->checkout->sessions->retrieve($session_id);
        dd($response);
    }

    public function checkEmail(Request $request)
{
    $email = $request->query('email');
    $user = Users::where('email', $email)->first();

    if ($user) {
        $response = [];

        if ($user->firstname) {
            $response['first_name'] = $user->firstname;
        }
        if ($user->id) {
            $response['user_id'] = $user->id;
        }

        if ($user->lastname) {
            $response['last_name'] = $user->lastname;
        }



        return response()->json($response);
    } else {
        return response()->json([], 404);
    }
}

}
