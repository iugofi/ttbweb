<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserauthController;




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

Artisan::call('down');

//forget pass
Route::post('/forget-pass', [UserController::class, 'forgetpass'])->name('user.forgetpass');
//mail
Route::get('/resetpass/{reset_id}', [UserController::class, 'resetpass'])->name('resetpass');
//pass reset form
Route::post('/resetpassform', [UserController::class, 'resetpassform'])->name('user.resetpassform');


//testing
Route::get('/test', [UserController::class, 'testpageview'])->name('testpageview');



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





//ttb total internet kulvinder 22-04-2024
Route::get('/totel-internet-security', [UserController::class, 'totalinternet'])->name('user.totalinternet');


//ttb commercial
Route::get('/commercial', [UserController::class, 'commercial_page'])->name('user.commercial');
Route::get('/network-protection', [UserController::class, 'network_protection'])->name('user.networkprotection');















Route::get('/', [UserController::class, 'index'])->name('user.index');



Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');
Route::post('/signdata', [UserController::class, 'signdata'])->name('user.signdata');

 Route::get('/mailcheck', function () {
    return view('User.activationkey');
 });



Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('/register', [UserController::class, 'saveUser'])->name('user.saveregister');

//message Activation key
Route::get('/activate/{activation_key}', [UserController::class, 'activate'])->name('activate');








Route::get('/ttbantivirus', [UserController::class, 'ttbantivirus'])->name('user.ttbantivirus');
Route::get('/ttbantivirusnew', [UserController::class, 'ttbantivirusnew'])->name('user.ttbantivirusnew');
Route::get('/anti-phishing', [UserController::class, 'Phishing'])->name('user.Phishing');







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
//Admin Controller
Route::get('/pageadmin', [AdminController::class, 'indexpage'])->name('admin.indexp');
Route::get('/newslist', [AdminController::class, 'newslist'])->name('admin.newslist');
//admin news
Route::get('/newscreate', [AdminController::class, 'newscreate'])->name('admin.newscreate');
Route::get('/newslistshow', [AdminController::class, 'newslistshow'])->name('admin.newslistshow');
Route::get('/newsedit/{id}', [AdminController::class, 'newsedit'])->name('edit.newsedit');
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
Route::get('/fatchstorepick', [AdminController::class, 'fatchstorepick'])->name('fetch.storepick');

//user admin section
Route::get('/useradminpage', [AdminController::class, 'useradminpage'])->name('admin.useradminpage');
Route::get('/adminuseredit/{id}', [AdminController::class, 'adminuseredit'])->name('edit.adminuseredit');
Route::post('/editadminusersave', [AdminController::class, 'editadminusersave'])->name('edit.editadminusersave');



Route::get('/useradmincreate', [AdminController::class, 'useradmincreate'])->name('admin.useradmincreate');
Route::post('/saveuseradmin', [AdminController::class, 'saveuseradmin'])->name('save.saveuseradmin');
Route::get('/facthadmin', [AdminController::class, 'facthadmin'])->name('fatch.facthadmin');
Route::get('/fatchadmindataajax', [AdminController::class, 'fatchadmindataajax'])->name('fetch.fatchadmindataajax');



});
















