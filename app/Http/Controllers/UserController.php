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
use App\Models\Newscomment; 
use App\Models\Contact; 
use Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{

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
            $user->save();

                Mail::send('Mail.resetpass', ['reset_id' => $user->reset_tokens], function ($message) use ($request) {
                    $message->to($request->email)->subject('TTB Internet Security Password Reset');
                });
                return response()->json([
                    'status' => 200,
                    'messages' => 'Reset Mail Send Successfully'
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
        // dd($reset_id);
        $user = Users::where('reset_tokens', $reset_id)->first();
        //  dd($$user);
        if ($user) {
            return view('User.passwordreset', ['reset_id' => $reset_id]); 
        } else {
             return response()->json([
                'status' => 401,
                'messages' => 'session expired !'
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
            $user->password = Hash::make($request->create_password);
            $user->reset_tokens = 'bye-bye';
            $user->status = 1;

            $user->save();
            return response()->json([
                'status' => 200,
                'messages' => 'Password Reset successfully !'
            ]);
        }
    }


    public function index()
    {
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
    public function passreset()
    {
        return view('User.resetpassword-basic');
    }

    public function contact_aspage()
    {
        return view('User.contact_as');
    }
    public function vpnshield()
    {
        return view('User.vpnshield');
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
        $newsscroll=News::orderBy('id', 'desc')->get()->random(8);
       $newsscroll2=News::orderBy('id', 'desc')->take(2)->get();
        $newsscroll3 = News::where('id', '<=', function ($query) {
            $query->select('id')
                ->from('news')
                ->orderByDesc('id')
                ->skip(2)
                ->take(1);
        })
        ->orderByDesc('id')
        ->paginate(12);


        

        return view('User.news',[
            'newsscroll'=>$newsscroll,
            'newsscroll2'=>$newsscroll2,
            'newsscroll3'=>$newsscroll3


        ]);
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

    $newsPost = News::where('slug', $id)->first();
    $totalnews = News::count();
    $recentblog = News::orderBy('id', 'desc')->get()->random(4);
    $newscomment=Newscomment::where('news_id',$newsPost->id)->where('status', 1)->get();


    return view('User.news-details', ['newsPost' => $newsPost,'recentblog'=>$recentblog,'totalnews' => $totalnews,'newscomment'=>$newscomment]);
}

public function storenewscomment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string'
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
    $blogs = Blog::orderBy('created_at', 'desc')->paginate(8);
    $recentblog = Blog::orderBy('created_at', 'desc')->take(16)->get();
    $totalblog = Blog::count();
    
    return view('User.blog', [
        'blogs' => $blogs,
        'recentblog' => $recentblog,
        'totalblog' => $totalblog
    ]);
}
public function blogDetails($id)
{

    $blogPost = Blog::where('slug', $id)->first();
    // dd($blogPost->id);
    $totalblog = Blog::count();
    $recentblog = Blog::orderBy('created_at', 'desc')->take(16)->get();
    // $Blocomment = Comment::count();
    $blogcomment=Comment::where('blog_id',$blogPost->id)->where('status', 1)->get();
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
            'comment' => 'required|string'
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
            $user->password = Hash::make($request->signup_password);
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
        $user->status = 1;
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
            if ($user->status == 1) {
                if (Hash::check($request->signin_password, $user->password)) {
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
                    'messages' => 'Account Not Activated, Please Check Your Registered Email To Activate Account.'
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


    public function myprofile(){

        // $sessionData = session()->all();
        $loggedInUser = session('loggedInUser');
        $user_data = Users::where('id',$loggedInUser)->first();

        if($loggedInUser==true)
        {
            return view('User.myprofile', ['loggedInUser' => $loggedInUser],['user_data' => $user_data]);
        }


        return redirect('/signin');
        
    }

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



    }
