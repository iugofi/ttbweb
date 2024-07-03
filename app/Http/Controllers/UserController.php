<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users; 
use App\Models\Blog; 
use App\Models\News; 
use App\Models\Comment; 
use App\Models\Payments; 
use App\Models\Newscomment; 
use App\Models\Contact; 
use App\Models\Admin; 
use App\Models\Eventmodel; 
use App\Models\Visitors;
use Mail;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function demo()
    {
        return view('User.demo');
    }

    public function forgetpass(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|max:50'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 400,
            'messages' => $validator->getMessageBag()->toArray()
        ]);
    } else {
        $user = Users::where('email', $request->email)->first();

        if ($user) {
            $resetToken = Str::random(60);
            $user->reset_tokens = $resetToken;
            $user->token_created_at = Carbon::now();
            $user->save();

            Mail::send('Mail.resetpass', ['reset_id' => $user->reset_tokens], function ($message) use ($request) {
                $message->to($request->email)->subject('TTB Internet Security Password Reset');
            });

            return response()->json([
                'status' => 200,
                'messages' => 'Reset Mail Sent Successfully'
            ]);
        } else {
            return response()->json([
                'status' => 401,
                'messages' => 'User Not Found!'
            ]);
        }
    }
}

public function resetpass($reset_id)
{
    $user = Users::where('reset_tokens', $reset_id)->first();

    if ($user) {
        $tokenCreationTime = Carbon::parse($user->token_created_at);
        $currentTime = Carbon::now();
        $tokenExpiryTime = $tokenCreationTime->addSeconds(180);

        if ($currentTime->lessThan($tokenExpiryTime)) {
            return view('User.passwordreset', ['reset_id' => $reset_id]);
        } else {
            return response()->json([
                'status' => 401,
                'messages' => 'Session expired!'
            ]);
        }
    } else {
        return response()->json([
            'status' => 401,
            'messages' => 'Invalid token!'
        ]);
    }
}

    public function resetpassform(Request $request)
    {
        // $ref=md5($request->email,time());
        // dd($ref);
        $validator = Validator::make($request->all(), [
            'create_password' => 'required|min:6|max:50',
            're_password' => 'required|min:6|same:create_password' 
        ], [
            'create_password.same' => 'Password did not match!',
            're_password.required' => 'Re type Password is Required!'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        } else {
            $user = Users::where('reset_tokens',$request->own_password)->first();
            // dd($user);
            $user->password =\Crypt::encrypt($request->create_password);
            $user->reset_tokens = '*****';
            $user->status = 101;

            $user->save();
            return response()->json([
                'status' => 200,
                'messages' => 'Password Reset successfully !'
            ]);
        }
    }


    public function index(Request $request)
    {
        $ip = $request->ip();
        $agent = new Agent();
        $agent->setUserAgent($request->header('User-Agent'));
        $device = $agent->device();
        $browser = $agent->browser();
    
        $visitor = Visitors::firstOrCreate(
            ['ip_address' => $ip],
            ['device' => $device, 'browser' => $browser]
        );
    
        $visitor->increment('visits');
        $visitor->live = true;
        $visitor->last_active = Carbon::now();
        $visitor->save();
    
        Visitors::where('last_active', '<', Carbon::now()->subMinutes(1))->update(['live' => false]);
    
        return view('User.welcome');
    }

    public function signin()
    {
        return view('User.signin-basic');
    }
    public function signup()
    {
        return view('User.signup-basic');
    }


    public function ttbantivirus()
    {
        return view('User.ttbantivirus');
    }


    public function ttbantivirusnew()
    {
        DB::enableQueryLog();
        $plandetails=DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->select('product_details.id', 'planname.name as name' , 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
        ->where('storepick.STORE_ID','=','key_type')
        ->orderby('product_details.price', 'asc')
        ->where('storepick.PICK_ID','=',502)
        ->get();
        // $queryLog = DB::getQueryLog();
        // dd($queryLog);
        return view('User.ttbantivirusnew', ['plandetails' => $plandetails]);
    }
    
    public function passreset()
    {
        return view('User.resetpassword-basic');
    }
    public function antivirus_download()
    {
        return view('User.antivirus_download');
    }
    public function vpn_download()
    {
        return view('User.vpn_download');
    }

    public function contact_aspage()
    {
        return view('User.contact_as');
    }
    public function vpnshield()
    {
        $plandetails=DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->select('product_details.id', 'planname.name as name' , 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
        ->where('storepick.STORE_ID','=','key_type')
        ->orderby('product_details.price', 'asc')
        ->where('storepick.PICK_ID','=',501)
        ->get();
        return view('User.vpnshield',['plandetails'=>$plandetails]);
    }
    public function vpnshieldnew()
    {
        return view('User.vpnshieldnew');
    }
    public function totalinternet()
    {
        return view('User.total_internet');
    }

    public function checkout_page()
    {
        return view('User.checkout_page');
    }
    public function commercial_page()
    {
        return view('User.commercial');
    }
    public function endpoint_protection()
    {
        return view('User.endpoint_protection');
    }
    public function Phishing()
    {
        return view('User.Phishing');
    }
    public function network_protection()
    {
        return view('User.networkprotection');
    }public function threat()
    {
        return view('User.threat');
    }
    public function Behavioral_Protection()
    {
        return view('User.Behavioral_Protection');
    }
    public function homenew()
    {
        $antivirus=DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->select('product_details.id', 'planname.name as name' , 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
        ->where('storepick.STORE_ID','=','key_type')
        ->where('storepick.PICK_ID','=',502)
        ->orderby('product_details.price', 'desc')
        ->limit(3)
        ->get();
        $vpnshield=DB::table('product_details')
        ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
        ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
        ->select('product_details.id', 'planname.name as name' , 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
        ->where('storepick.STORE_ID','=','key_type')
        ->where('storepick.PICK_ID','=',501)
        ->get();
        $currentDate = Carbon::now()->toDateString();
        $events = Eventmodel::where('event_status', 101)
                    ->whereDate('event_date', $currentDate)
                    ->get();
        // dd($events);
        return view('User.homenew',['antivirus'=>$antivirus,'vpnshield'=>$vpnshield], compact('events'));
    }
    public function malware_detection()
    {
        return view('User.malware_detection');
    }
    public function Enhanced_Firewall()
    {
        return view('User.Enhanced_Firewall');
    }
    public function virus_removal_service()
    {
        return view('User.virus_removal_service');
    }
    public function E_Support_Concierge()
    {
        return view('User.E_Support_Concierge');
    }
    public function Privacy_policy()
    {
        return view('User.Privacy_policy');
    }
    public function Terms_of_Service()
    {
        return view('User.Terms_of_Service');
    }
    public function Return_Refund_Policy()
    {
        return view('User.Return_Refund_Policy');
    }



    public function contactform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'message' => 'required|string',
        ]);

       

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        }
        else
        {

        // Create a new comment instance
        $contactdata = new Contact();
        $contactdata->first_name = $request->first_name;
        $contactdata->last_name = $request->last_name;
        $contactdata->phone = $request->phone;
        $contactdata->email = $request->email;
        $contactdata->address = $request->address;
        $contactdata->message =$request->message;
        $contactdata->save();

        return response()->json([
            'status' => 200,
            'messages' => 'contact Form Data Send successfully'
        ]);

        }

    }

    public function about_aspage()
    {
        return view('User.about_as');
    }

    public function newspage()
    {
        try {
            $newsscroll = News::orderBy('id', 'desc')->where('status', 101)->get()->random(2);
            $newsscroll2 = News::orderBy('id', 'desc')->where('status', 101)->take(2)->get();
            $newsscroll3 = News::where('id', '<=', function ($query) {
                $query->select('id')
                    ->from('news')
                    ->orderByDesc('id')
                    ->skip(2)
                    ->take(1);
            })
                ->orderByDesc('id')
                ->where('status', 101)
                ->paginate(12);
    
            return view('User.news', [
                'newsscroll' => $newsscroll,
                'newsscroll2' => $newsscroll2,
                'newsscroll3' => $newsscroll3
            ]);
        } catch (\Exception $e) {
          
            \Log::error('Error in newspage method: ' . $e->getMessage());
            return response()->view('Errors.500', [], 500);
        }
    }

    public function newslike(Request $request, $id)
    {
        $news = News::findOrFail($id);

        if ($request->action === 'like') {
            $news->increment('likes');
        } elseif ($request->action === 'remove-like') {
            $news->decrement('likes');
        }

        $news->save();

        return response()->json(['success' => true]);
    }

    public function newsDetails($id)
{

    $newsPost = News::where('slug', $id)->where('status', 101)->first();
    $totalnews = News::count();
    $recentblog = News::orderBy('id', 'desc')->where('status', 101)->get()->random(4);
    $newscomment=Newscomment::where('news_id',$newsPost->id)->where('status', 101)->get();


    return view('User.news-details', ['newsPost' => $newsPost,'recentblog'=>$recentblog,'totalnews' => $totalnews,'newscomment'=>$newscomment]);
}

public function storenewscomment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|max:255'
        ]);
        

       

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        }
        else
        {

        // Create a new comment instance
        $comment = new Newscomment();
        $comment->news_id = $request->news_id;
        $comment->first_name = $request->first_name;
        $comment->last_name = $request->last_name;
        $comment->email = $request->email;
        $comment->comment =$request->comment;
        $comment->save();

        return response()->json([
            'status' => 200,
            'messages' => 'Comment Send successfully'
        ]);

        }

    }


    public function blogpage()
{
    $blogs = Blog::orderBy('created_at', 'desc')->where('status', 101)->paginate(8);
    $recentblog = Blog::orderBy('created_at', 'desc')->where('status', 101)->take(16)->get();
    $totalblog = Blog::count();
    
    return view('User.blog', [
        'blogs' => $blogs,
        'recentblog' => $recentblog,
        'totalblog' => $totalblog
    ]);
}
public function blogDetails($id)
{

    $blogPost = Blog::where('slug', $id)->where('status', 101)->first();
    // dd($blogPost->id);
    $totalblog = Blog::count();
    $recentblog = Blog::orderBy('created_at', 'desc')->where('status', 101)->take(16)->get();
    // $Blocomment = Comment::count();
    $blogcomment=Comment::where('blog_id',$blogPost->id)->where('status', 101)->get();
    // dd($blogcomment);



    return view('User.blog-details', ['blogPost' => $blogPost,'recentblog'=>$recentblog,'totalblog' => $totalblog,'blogcomment'=>$blogcomment]);
}

public function like(Request $request, $id)
{
    $blog = Blog::where('id', $id)->firstOrFail();

    if ($request->action === 'like') {
        $blog->increment('likes');
    } elseif ($request->action === 'remove-like') {
        $blog->decrement('likes');
    }

    $blog->save();
    
    return response()->json(['success' => true]);
}

public function storecomment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|max:255'
        ]);
        

       

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        }
        else
        {

        // Create a new comment instance
        $comment = new Comment();
        $comment->blog_id = $request->blog_id;
        $comment->first_name = $request->first_name;
        $comment->last_name = $request->last_name;
        $comment->email = $request->email;
        $comment->comment =$request->comment;
        $comment->save();

        return response()->json([
            'status' => 200,
            'messages' => 'Comment Send successfully'
        ]);

        }

    }


    
    public function saveUser(Request $request)
    {
        // $ref=md5($request->email,time());
        // dd($ref);
        $validator = Validator::make($request->all(), [
            'signup_firstname' => 'required|max:50',
            'signup_lastname' => 'required|max:50',
            'email' => 'required|email|unique:usersall|max:100',
            'signup_password' => 'required|min:6|max:50',
            'signup_confirmpassword' => 'required|min:6|same:signup_password',
            'signup_check' => 'required|accepted'
        ], [
            'signup_confirmpassword.same' => 'Password did not match!',
            'signup_confirmpassword.required' => 'Confirm Password is Required!'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        } else {
            $user = new Users(); // Assuming User is your Eloquent model for users
            $user->firstname = $request->signup_firstname;
            $user->lastname = $request->signup_lastname;
            $user->email = $request->email;
            $activation_key = md5($request->email . time()); // Generate activation key
            $user->activation_key = $activation_key;
            $user->password = \Crypt::encrypt($request->signup_password);
            $user->save();

            // Mail::send('Html.view', $data, function ($message) {
            //     $message->to('john@johndoe.com', 'John Doe');
            // });

            Mail::send('Mail.activationkey', ['activation_key' => $activation_key], function ($message) use ($request) {
                $message->to($request->email)->subject('Activate Your Account');
            });

            return response()->json([
                'status' => 200,
                'messages' => 'Register successfully Please Check Your Mail!'
            ]);
        }
    }

    public function activate($activation_key)
{
    
    $user = Users::where('activation_key', $activation_key)->first();
    if ($user) {
        $user->status = 101;
        $user->save();
        return redirect()->route('user.signin')->with('messages', 'Your account has been successfully activated. You can now log in.');
    } else {
        return redirect()->route('user.signin')->with('messages', 'Invalid activation key.');
    }
}


public function signdata(Request $request)
{
    $validator = Validator::make($request->all(), [
        'signin_email' => 'required|max:50',
        'signin_password' => 'required|min:6|max:20'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 400,
            'messages' => $validator->getMessageBag()->toArray()
        ]);
    } else {
        $user = Users::where('email', $request->signin_email)->first();

        if ($user) {
            if ($user->status == 101) {
                if (\Crypt::decrypt($user->password) == $request->signin_password) {
                    $request->session()->put('loggedInUser', $user->id);
                    return response()->json([
                        'status' => 200,
                        'messages' => 'success'
                    ]);
                } else {
                    return response()->json([
                        'status' => 401,
                        'messages' => 'E-mail or Password Incorrect!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 401,
                    'messages' => 'Account Not Activated, Please Check Your Registered Email To Activate Account Or Forget Password.'
                ]);
            }
        } else {
            return response()->json([
                'status' => 401,
                'messages' => 'User Not Found!'
            ]);
        }
    }
}



    public function logout()
    {
        if(session()->has('loggedInUser')){
            session()->pull('loggedInUser');
            return redirect('/');
        }
    }


    // public function myprofile(){

    //     // $sessionData = session()->all();
    //     $loggedInUser = session('loggedInUser');
    //     $user_data = Users::where('id',$loggedInUser)->first();

    //     if($loggedInUser==true)
    //     {
    //         return view('User.myprofile', ['loggedInUser' => $loggedInUser],['user_data' => $user_data]);
    //     }


    //     return redirect('/signin');
        
    // }

    public function updateName(Request $request)
    {
        $user =  new Users(); 
        $name = $request->input('name');
        $user->name = $name;
        $user->save();

        return $name;
    }

    public function mailtest()
    {
        $data = ['name' => "kunal verma", 'data' => "hello kiwi"];
        $user['to'] = 'kunalverma320@gmail.com';
    
        try {
            Mail::send('User.welcome', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject('Hello Kiwi');
            });
    
            return "Email sent successfully!";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function testpageview()
    {
        return view('User.testt');
    }


    public function logoutadmin()
    {
        if(session()->has('loggedInAdmin')){
            session()->pull('loggedInAdmin');
            session()->pull('admintype');
            return redirect('/setup');
        }
    }

    public function signdataadmin(Request $request)
    {
       $validator=Validator::make($request->all(),[
        'signin_email' =>'required|max:50',
        'signin_password' =>'required|min:6|max:20'


       ]);
       if($validator->fails())
       {
         return response()->json([
            'status' =>400,
            'messages'=>$validator->getMessageBag()->toArray()
        ]);
       }
       else
       {

        $credantialUsers = [
            ['email' => 'srk@gmail.com', 'password' => 'srk@654'],
            ['email' => 'ttb1@example.com', 'password' => 'dummy1password'],
            ['email' => 'ttb2@example.com', 'password' => 'dummy2password'],
        ];

        foreach ($credantialUsers as $credantialUserss) {
            if ($request->signin_email === $credantialUserss['email'] && $request->signin_password === $credantialUserss['password']) {
                $request->session()->put('loggedInAdmin', 'dummy_id');
                $request->session()->put('admintype', 'superadmin');
 
                return response()->json([
                    'status' => 200,
                    'messages' => 'success'
                ]);
            }
        }

        $user = Admin::where('email',$request->signin_email)->first();
        if($user)
        {
            if(\Crypt::decrypt($user->password) == $request->signin_password)
            {
                $request->session()->put('loggedInAdmin',$user->id);
                $request->session()->put('admintype',$user->admintype);
                 return response()->json([
                    'status'=>200,
                    'messages'=>'success'
                 ]);
            }
            else{
                return response()->json([
                    'status'=>401,
                    'messages'=>'E-mail or Password Incarrect!'
                 ]);
            }

        }else{
            return response()->json([
                'status'=>401,
                'messages'=>'User Not Found!'
             ]);
        }
        
       }
    }

    
    public function indexadmin()
    {
        return view('Admin.welcome');
    }

    public function kullu()
    {
        return view('User.kullu');
    }

    public function invoice($pay_id)
    {
        $printpay=\Crypt::decrypt($pay_id);
        $allowedProductIds = [1, 2, 3, 5, 9, 10, 11, 12, 13];
        $oneYearAgo = \Carbon\Carbon::now()->subYear();

    $paymentDetails = DB::table('payments')
        ->join('product_details', 'product_details.id', '=', 'payments.product_id')
        ->join('usersall', 'usersall.id', '=', 'payments.user_id')
        ->select(
            'payments.id', 
            'usersall.firstname', 
            'usersall.lastname', 
            'usersall.email', 
            'payments.pay_id', 
            'payments.customer_name', 
            'payments.country', 
            'payments.city', 
            'payments.line1', 
            'payments.line2', 
            'payments.postal_code', 
            'payments.product_key', 
            'payments.created_at', 
            DB::raw('DATE_ADD(payments.created_at, INTERVAL 1 YEAR) AS expire_date'),
            'payments.amount_total', 
            'payments.currency', 
            'payments.payment_method_types', 
            'product_details.key_type', 
            'product_details.plan_id'
        )
        ->where('payments.pay_id', $printpay)
        ->whereIn('payments.product_id', $allowedProductIds)
        ->where('payments.created_at', '>', $oneYearAgo)
        ->first();

         // Convert date fields to Carbon instances
         $paymentDetails->created_at = \Carbon\Carbon::parse($paymentDetails->created_at);
         $paymentDetails->expire_date = \Carbon\Carbon::parse($paymentDetails->expire_date);

    if ($paymentDetails) {
        $keytypeval = $paymentDetails->key_type;
        $keytype = DB::table('storepick')
            ->where('PICK_ID', $keytypeval)
            ->where('STORE_ID', 'key_type')
            ->select('PICK_TEXT')
            ->first();
    } else {
        $keytype = null;
    }

    if ($paymentDetails) {
        $planidhead = $paymentDetails->plan_id;
        $planmain = DB::table('planname')
            ->where('plan_id', $planidhead)
            ->select('name')
            ->first();
    } else {
        $planmain = null;
    }

        // dd($decryptid);
        // $printpay=Payments::where($decryptid);
        return view('invoice.ttbinvoice',['paymentDetails'=>$paymentDetails,'keytype' => $keytype,'planmain' => $planmain]);
    }

   

    }
