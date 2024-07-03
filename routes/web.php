<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserauthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ExcelController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Artisan::call('up');

//forget pass
Route::post('/forget-pass', [UserController::class, 'forgetpass'])->name('user.forgetpass');
//mail
Route::get('/resetpass/{reset_id}', [UserController::class, 'resetpass'])->name('resetpass');
//pass reset form
Route::post('/resetpassform', [UserController::class, 'resetpassform'])->name('user.resetpassform');





//testing
Route::get('/test', [UserController::class, 'testpageview'])->name('testpageview');



//malware detection page
Route::get('/malware_detection', [UserController::class, 'malware_detection'])->name('user.malware_detection');

//test


//blog page
Route::get('/blog', [UserController::class, 'blogpage'])->name('user.blogpage');
Route::get('/blog/{id}', [UserController::class, 'blogDetails'])->name('blog.details');
Route::post('/blog/{id}/like', [UserController::class, 'like'])->name('blog.like');
Route::post('/save-comment', [UserController::class, 'storecomment'])->name('save.comment');

//news page
Route::get('/news', [UserController::class, 'newspage'])->name('user.news');
Route::post('/news/{id}/like', [UserController::class, 'newslike'])->name('news.like');
Route::get('/news/{id}', [UserController::class, 'newsDetails'])->name('news.details');
Route::post('/save-newscomment', [UserController::class, 'storenewscomment'])->name('save.newscomment');

//about as
Route::get('/about_as', [UserController::class, 'about_aspage'])->name('user.about_as');

//contact as
Route::get('/contact_as', [UserController::class, 'contact_aspage'])->name('user.contact_as');
Route::post('/save-contactform', [UserController::class, 'contactform'])->name('save.contactform');

//checkcart
Route::get('/checkout_page', [UserController::class, 'checkout_page'])->name('user.checkout_page');


//ttb vpn-shield
Route::get('/vpn-shield', [UserController::class, 'vpnshield'])->name('user.vpnshield');

//ttb-vpn shild2
Route::get('/vpnshieldnew', [UserController::class, 'vpnshieldnew'])->name('user.vpnshieldnew');

//Endpoint Protection
Route::get('/Endpoint_protection', [UserController::class, 'endpoint_protection'])->name('user.endpoint_protection');

// Legal Page Route
Route::get('/Privacy_policy', [UserController::class, 'Privacy_policy'])->name('user.Privacy_policy');
Route::get('/Terms_of_Service', [UserController::class, 'Terms_of_Service'])->name('user.Terms_of_Service');
Route::get('/Return_Refund_Policy', [UserController::class, 'Return_Refund_Policy'])->name('user.Return_Refund_Policy');





//Behavioral Protection
Route::get('/Behavioral_Protection', [UserController::class, 'Behavioral_Protection'])->name('user.Behavioral_Protection');
Route::get('/Enhanced_Firewall', [UserController::class, 'Enhanced_Firewall'])->name('user.Enhanced_Firewall');
Route::get('/virus_removal_service', [UserController::class, 'virus_removal_service'])->name('user.virus_removal_service');
Route::get('/E_Support_Concierge', [UserController::class, 'E_Support_Concierge'])->name('user.E_Support_Concierge');

Route::get('/vpn_shield/download', [UserController::class, 'vpn_download'])->name('user.vpn_download');
Route::get('/ttb_antivirus_shield/download', [UserController::class, 'antivirus_download'])->name('user.antivirus_download');











//ttb total internet kulvinder 22-04-2024
Route::get('/totel-internet-security', [UserController::class, 'totalinternet'])->name('user.totalinternet');



//ttb commercial
Route::get('/commercial', [UserController::class, 'commercial_page'])->name('user.commercial');
Route::get('/network-protection', [UserController::class, 'network_protection'])->name('user.networkprotection');











Route::get('/', [UserController::class, 'homenew'])->name('user.index');

//home page new 
Route::get('/homenew', [UserController::class, 'index'])->name('user.homenew');

Route::get('/invoice/{id}', [UserController::class, 'invoice'])->name('user.invoice');





// Route::group([
//    'middleware' => ['cookie-consent']
// ], function(){
  

// });



Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');
Route::post('/signdata', [UserController::class, 'signdata'])->name('user.signdata');

 Route::get('/mailcheck', function () {
    return view('User.activationkey');
 });



Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('/register', [UserController::class, 'saveUser'])->name('user.saveregister');

//message Activation key
Route::get('/activate/{activation_key}', [UserController::class, 'activate'])->name('activate');








// Route::get('/ttbantivirusnew', [UserController::class, 'ttbantivirus'])->name('user.ttbantivirus');
Route::get('/ttbantivirus', [UserController::class, 'ttbantivirusnew'])->name('user.ttbantivirusnew');
Route::get('/anti-phishing', [UserController::class, 'Phishing'])->name('user.Phishing');

Route::get('/threat-protection', [UserController::class, 'threat'])->name('user.threat');






Route::get('/passreset', [UserController::class, 'passreset'])->name('user.passreset');


Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/myprofile', [UserauthController::class, 'myprofile'])->name('user.myprofile');
Route::post('passchangeprifile', [UserauthController::class, 'passchangeprifile'])->name('user.passchangeprifile');
Route::post('myprofileother', [UserauthController::class, 'myprofileother'])->name('user.myprofileother');
Route::post('/update/name', [UserController::class, 'updateName'])->name('update.name');


//admin
Route::get('/setup', [UserController::class, 'indexadmin'])->name('admin.index');
Route::post('/signdataadmin', [UserController::class, 'signdataadmin'])->name('admin.signdata');


//auth Admin Login Page
Route::get('/logoutadmin', [UserController::class, 'logoutadmin'])->name('admin.logout');


//mail testing
Route::get('/mailtest', [UserController::class, 'mailtest'])->name('admin.mailtest');

      Route::prefix('setup')->group(function () {

         // Admin Profile
         Route::get('/adminprofile', [AdminController::class, 'adminprofile'])->name('admin.profile');
         //Admin Controller
         Route::get('/pageadmin', [AdminController::class, 'indexpage'])->name('admin.indexp');
         Route::get('/newslist', [AdminController::class, 'newslist'])->name('admin.newslist');
         //news comment all
         Route::get('/newscommentlist', [AdminController::class, 'newscommentlist'])->name('admin.newscommentlist');
         Route::delete('/newscommentdelete/{id}', [AdminController::class, 'newscommentdelete'])->name('delete.newscommentdelete');
         Route::get('/newscommentedit/{id}', [AdminController::class, 'newscommentedit'])->name('edit.newscommentedit');
         Route::post('/editcommentnews', [AdminController::class, 'editcommentnews'])->name('edit.editcommentnews');

         //blog comment all
         Route::get('/blogcommentlist', [AdminController::class, 'blogcommentlist'])->name('admin.blogcommentlist');
         Route::delete('/blogcommentdelete/{id}', [AdminController::class, 'blogcommentdelete'])->name('delete.blogcommentdelete');
         Route::get('/blogcommentedit/{id}', [AdminController::class, 'blogcommentedit'])->name('edit.blogcommentedit');
         Route::post('/editcommentblog', [AdminController::class, 'editcommentblog'])->name('edit.editcommentblog');
         //admin news
         Route::get('/newscreate', [AdminController::class, 'newscreate'])->name('admin.newscreate');
         Route::get('/newslistshow', [AdminController::class, 'newslistshow'])->name('admin.newslistshow');
         // Route::get('/newsedit/{id}', [AdminController::class, 'newsedit'])->name('edit.newsedit');
         Route::delete('/newsdelete/{id}', [AdminController::class, 'newsdelete'])->name('delete.newsdelete');
         Route::post('/savenews', [AdminController::class, 'savenews'])->name('save.news');
         Route::post('/editnews', [AdminController::class, 'editnews'])->name('edit.news');
         Route::get('/facthnews', [AdminController::class, 'facthnews'])->name('fatch.news');

         //admin blog
         Route::get('/bloglistshow', [AdminController::class, 'bloglistshow'])->name('admin.bloglistshow');
         Route::delete('/blogsdelete/{id}', [AdminController::class, 'blogsdelete'])->name('delete.blogsdelete');
         Route::get('/blogscreate', [AdminController::class, 'blogscreate'])->name('admin.blogscreate');
         Route::get('/facthblog', [AdminController::class, 'facthblog'])->name('fatch.blog');
         Route::post('/saveblog', [AdminController::class, 'saveblog'])->name('save.blog');
         Route::get('/blogedit/{id}', [AdminController::class, 'blogedit'])->name('edit.blogedit');
         Route::post('/editblog', [AdminController::class, 'editblog'])->name('edit.blog');

         //storepick
         Route::get('/storepickpage', [AdminController::class, 'storepickpage'])->name('admin.storepickpage');
         Route::get('/storepickedit/{id}', [AdminController::class, 'storepickedit'])->name('edit.storepickedit');


         Route::get('/newsedit/{id}', [AdminController::class, 'newsedit'])->name('edit.newsedit');
         Route::post('/editstorepicksave', [AdminController::class, 'editstorepicksave'])->name('edit.editstorepicksave');

         Route::delete('/storepickdelete/{id}', [AdminController::class, 'storepickdelete'])->name('delete.storepickdelete');
         Route::get('/storepickadd', [AdminController::class, 'storepickadd'])->name('admin.storepickadd');
         Route::post('/savestorepick', [AdminController::class, 'savestorepick'])->name('save.storepick');

         Route::get('/fatchstorepick', [AdminController::class, 'fatchstorepick'])->name('fetch.storepick');

         //user admin section
         Route::get('/useradminpage', [AdminController::class, 'useradminpage'])->name('admin.useradminpage');
         Route::get('/adminuseredit/{id}', [AdminController::class, 'adminuseredit'])->name('edit.adminuseredit');
         Route::post('/editadminusersave', [AdminController::class, 'editadminusersave'])->name('edit.editadminusersave');



         Route::get('/useradmincreate', [AdminController::class, 'useradmincreate'])->name('admin.useradmincreate');
         Route::post('/saveuseradmin', [AdminController::class, 'saveuseradmin'])->name('save.saveuseradmin');
         Route::get('/facthadmin', [AdminController::class, 'facthadmin'])->name('fatch.facthadmin');
         Route::get('/fatchadmindataajax', [AdminController::class, 'fatchadmindataajax'])->name('fetch.fatchadmindataajax');

         //plan 
         Route::get('/planshow', [AdminController::class, 'planlistshow'])->name('plan.listshow');
         Route::get('/plancreate', [AdminController::class, 'plancreate'])->name('plan.plancreate');
         Route::get('/facthplan', [AdminController::class, 'facthplan'])->name('fatch.facthplan');
         Route::post('/saveplan', [AdminController::class, 'saveplan'])->name('save.saveplan');
         Route::delete('/plandelete/{id}', [AdminController::class, 'plandelete'])->name('delete.plandelete');
         Route::get('/planedit/{id}', [AdminController::class, 'planedit'])->name('edit.planedit');
         Route::post('/editplansave', [AdminController::class, 'editplansave'])->name('edit.editplansave');


         //plan details
         Route::get('/plandetailsshow', [AdminController::class, 'plandetailsshow'])->name('plan.detailsshow');
         Route::get('/plandetailscreate', [AdminController::class, 'plandetailscreate'])->name('plan.plandetailscreate');
         Route::post('/saveplandetails', [AdminController::class, 'saveplandetails'])->name('save.saveplandetails');
         Route::get('/editplandetails/{id}', [AdminController::class, 'editplandetails'])->name('edit.plandetailsedit');
         Route::post('/editplandetailssave', [AdminController::class, 'editplandetailssave'])->name('edit.editplandetailssave');
         Route::post('/editplansearch', [AdminController::class, 'editplansearch'])->name('search.editplansearch');
         Route::delete('/plandetailsdelete/{id}', [AdminController::class, 'plandetailsdelete'])->name('delete.plandetailsdelete');


         //vpn shield Payment 
         Route::get('/vpnpayshow', [AdminController::class, 'vpnpayshow'])->name('pay.vpnpayshow');
         Route::get('/payedit/{id}', [AdminController::class, 'payedit'])->name('edit.payedit');
         Route::delete('/vpnpaydelete/{id}', [AdminController::class, 'vpnpaydelete'])->name('delete.vpnpaydelete');

         //all payment list
         Route::get('/allpaymentshow', [AdminController::class, 'allpaymentshow'])->name('pay.allpaymentshow');

         //antivirus payment 
         Route::get('/antiviruspayshow', [AdminController::class, 'antiviruspayshow'])->name('pay.antiviruspayshow');

         Route::get('/customersshow', [AdminController::class, 'customershow'])->name('customer.show');
         Route::get('/customersredit/{id}', [AdminController::class, 'customersedit'])->name('customers.edit');
         Route::post('/editcustomerssave', [AdminController::class, 'editcustomerssave'])->name('edit.customerssave');
         Route::delete('/customerdelete/{id}', [AdminController::class, 'customerdelete'])->name('delete.customerdelete');


         //key 
         Route::get('/keyshow', [AdminController::class, 'keyshow'])->name('key.show');
         Route::get('/keyadd', [AdminController::class, 'keyadd'])->name('key.add');
         Route::get('/editkey/{id}', [AdminController::class, 'editkey'])->name('edit.keyedit');
         Route::post('/editkeysave', [AdminController::class, 'editkeysave'])->name('edit.editkeysave');
         Route::post('/editkeysearch', [AdminController::class, 'editkeysearch'])->name('search.editkeysearch');

         Route::post('/savekey', [AdminController::class, 'savekey'])->name('save.savekey');
         Route::delete('/keydelete/{id}', [AdminController::class, 'keydelete'])->name('delete.keydelete');

         Route::get('/visitor_traffic', [AdminController::class, 'visitor_traffic'])->name('user.visitor_traffic');

         //event add
         Route::get('/eventlist', [AdminController::class, 'eventlist'])->name('user.eventlist');
         Route::get('/addevent', [AdminController::class, 'addevent'])->name('user.addevent');



         });

//payment page all
Route::get('/fpay/{id}',[PaymentController::class,'fpayitem'])->name('user.fpay');
Route::post('/otpcheckfpay',[PaymentController::class,'otpcheckfpay'])->name('user.otpcheckfpay');
Route::post('otpverifyfpay',[PaymentController::class,'otpverifyfpay'])->name('user.otpverifyfpay');
Route::post('stripefpay/checkout',[PaymentController::class,'stripeCheckoutfpay'])->name('user.stripeCheckoutfpay');
Route::get('/successpay/{vid}',[PaymentController::class,'successpay'])->name('user.successpay');
Route::get('/cancelpay',[PaymentController::class,'cancelpay'])->name('user.cancelpay');
Route::get('/success',[PaymentController::class,'success'])->name('user.success');


Route::get('/testpagenew/{session_id}', [PaymentController::class, 'testpagenew'])->name('user.testpagenew');


//visitor traffic
















