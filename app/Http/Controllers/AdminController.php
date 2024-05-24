<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin; 
use App\Models\News; 
use App\Models\Blog; 
use App\Models\Storepick; 
use App\Models\Users; 
use App\Models\Planname; 
use App\Models\Plandetails; 

use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->loggedInAdmin = session('loggedInAdmin');
            $this->admintype = session('admintype');

            // dd($this->admintype);
            if ($this->loggedInAdmin) {
                $this->adminData = Admin::find($this->loggedInAdmin);
            }
            return $next($request);
        });
    }

    public function indexpage(){
            //  dd($this->admintype);

        if ($this->loggedInAdmin) {
        return view('Admin.index');
        } else {
            return redirect('/setup');
        }
    }

        public function newslist(){
        if ($this->loggedInAdmin) {
            $news = News::orderBy('id', 'desc')->get();

        return view('Admin.newslist',['news'=>$news]);
        } else {
            return redirect('/setup');
        }
    }

public function newscreate(){
    if ($this->loggedInAdmin) {
    return view('Admin.newscreate');
    } else {
        return redirect('/setup');
    }
}

public function newslistshow(){
    if ($this->loggedInAdmin) {
   
        $news = News::all(); // Fetch all news data
        return response()->json($news);

    } else {
        return redirect('/setup');
    }
}

        public function savenews(Request $request){
        if ($this->loggedInAdmin) {

        $validator = Validator::make($request->all(), [
            'news_title' => 'required',
            'news_slug' => 'required',
            'meta_title' => 'required',
            'canonical_url' => 'required',
            'meta_keyword' => 'required',
            'meta_desc' => 'required',
            'news_description' => 'required',
            'news_status' => 'required',
            'news_images' => 'required'
        ]);
        

        

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
            ]);
        }
        else
        {

            if ($request->hasFile('news_images')) {
                $image = $request->file('news_images');
                $imageName = time().'.'.$image->getClientOriginalExtension(); 
                $image->move('assets/images/dailynews', $imageName);
               

                $news = new News();
                $news->title = $request->news_title;
                $news->slug = $request->news_slug;
                $news->meta_title = $request->meta_title;
                $news->canonical_url = $request->canonical_url;
                $news->meta_keyword =$request->meta_keyword;
                $news->meta_desc =$request->meta_desc;
                $news->meta_keyword =$request->meta_keyword;
                $news->description =$request->news_description;
                $news->status =$request->news_status;
                $news->image=$imageName;
                $news->save();
                
                } else {
                    return response()->json([
                        'status' => 400,
                        'messages' => 'No image uploaded'
                    ]);
                }

                return response()->json([
                    'status' => 200,
                    'messages' => 'News Post successfully'
                ]);

                }
                

            } else {
                return redirect('/setup');
            }
            }

            public function facthnews()
            {
                $posts = News::orderBy('created_at', 'asc')->where('status',101)->limit(8)->get();
                return response()->json($posts);
            }

            public function newsedit($id){
                if ($this->loggedInAdmin) {
                    $decryptid=\Crypt::decrypt($id);
                    $editnews=News::find($decryptid);

                    return view('Admin.newsedit',['editnews'=>$editnews]);
                
                } else {
                    return redirect('/setup');
                }
            }

            public function newsdelete($id)
                {
                    if ($this->loggedInAdmin) {
                        $item = News::findOrFail($id);
                        $imagePath = 'assets/images/dailynews/' . $item->image;
                        
                        if (File::exists($imagePath)) {
                            File::delete($imagePath);
                        }
                        $item->delete();
                        return response()->json(['message' => 'Item deleted successfully']);
                    } else {
                        return redirect('/setup'); 
                    }
                }

                public function editnews(Request $request)
                {

                    $id=$request->main_id;
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'news_title' => 'required',
                            'news_slug' => 'required',
                            'meta_title' => 'required',
                            'canonical_url' => 'required',
                            'meta_keyword' => 'required',
                            'meta_desc' => 'required',
                            'news_description' => 'required',
                            'news_status' => 'required'
                          
                        ]);
                        
  
                
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {


                                if ($request->hasFile('news_images')) {
                                    $image = $request->file('news_images');
                                    $imageName = time().'.'.$image->getClientOriginalExtension(); 
                                    $image->move('assets/images/dailynews', $imageName);
                                } else {
                                 
                                    $imageName = $request->image_new;
                                }

                                $news = News::where('id', $id)->first();

                                if (!$news) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'News not found'
                                    ]);
                                }
                               
                                $news->update([
                                    'title' => $request->news_title,
                                    'slug' => $request->news_slug,
                                    'meta_title' => $request->meta_title,
                                    'canonical_url' => $request->canonical_url,
                                    'meta_keyword' => $request->meta_keyword,
                                    'meta_desc' => $request->meta_desc,
                                    'description' => $request->news_description,
                                    'status' => $request->news_status,
                                    'image' => $imageName
                                ]);
                
                               
                                
                                
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'News Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }

                
                public function bloglistshow()
                {
                    if($this->loggedInAdmin)
                    {
                        $blog = Blog::orderBy('id', 'desc')->get();
                        return view('Admin.bloglist',['blog'=>$blog]);
                    }
                    else{
                        return redirect('/setup');
                    }
                }

                public function blogsdelete($id)
                {
                    if ($this->loggedInAdmin) {
                        $item = Blog::findOrFail($id);
                        $imagePath = 'assets/images/dailyblogs/' . $item->image;
                        
                        if (File::exists($imagePath)) {
                            File::delete($imagePath);
                        }
                        $item->delete();
                        return response()->json(['message' => 'Blogs deleted successfully']);
                    } else {
                        return redirect('/setup'); 
                    }
                }

                public function blogscreate(){
                    if ($this->loggedInAdmin) {
                    return view('Admin.blogscreate');
                    } else {
                        return redirect('/setup');
                    }
                }

                public function facthblog()
            {
                $posts = Blog::orderBy('created_at', 'asc')->where('status',101)->limit(8)->get();
                return response()->json($posts);
            }

            public function saveblog(Request $request){
                if ($this->loggedInAdmin) {
            
                    $validator = Validator::make($request->all(), [
                        'blog_title' => 'required',
                        'blog_slug' => 'required',
                        'meta_title' => 'required',
                        'canonical_url' => 'required',
                        'meta_keyword' => 'required',
                        'meta_desc' => 'required',
                        'blog_description' => 'required',
                        'blog_status' => 'required',
                        'blog_images' => 'required'
                    ]);
                    
            
                    
            
                    if ($validator->fails()) {
                        return response()->json([
                            'status' => 400,
                            'messages' => $validator->getMessageBag()->toArray()
                        ]);
                    }
                    else
                    {
            
                        if ($request->hasFile('blog_images')) {
                            $image = $request->file('blog_images');
                            $imageName = time().'.'.$image->getClientOriginalExtension(); 
                            $image->move('assets/images/dailyblogs', $imageName);
                           
            
                            $news = new Blog();
                            $news->title = $request->blog_title;
                            $news->slug = $request->blog_slug;
                            $news->meta_title = $request->meta_title;
                            $news->canonical_url = $request->canonical_url;
                            $news->meta_keyword =$request->meta_keyword;
                            $news->meta_desc =$request->meta_desc;
                            $news->meta_keyword =$request->meta_keyword;
                            $news->description =$request->blog_description;
                            $news->status =$request->blog_status;
                            $news->image=$imageName;
                            $news->save();
                            
                            } else {
                                return response()->json([
                                    'status' => 400,
                                    'messages' => 'No image uploaded'
                                ]);
                            }
            
                            return response()->json([
                                'status' => 200,
                                'messages' => 'Blog Post successfully'
                            ]);
            
                            }
                            
            
                        } else {
                            return redirect('/setup');
                        }
                        }

                        public function blogedit($id){
                            if ($this->loggedInAdmin) {
                                $decryptid=\Crypt::decrypt($id);
                                $editblog=Blog::find($decryptid);
            
                                return view('Admin.blogedit',['editblog'=>$editblog]);
                            
                            } else {
                                return redirect('/setup');
                            }
                        }


                        public function editblog(Request $request)
                {

                    $id=$request->main_id;  
                   
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'blog_title' => 'required',
                            'blog_slug' => 'required',
                            'meta_title' => 'required',
                            'canonical_url' => 'required',
                            'meta_keyword' => 'required',
                            'meta_desc' => 'required',
                            'blog_description' => 'required',
                            'blog_status' => 'required'
                          
                        ]);
                        
  
                
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {


                                if ($request->hasFile('blog_images')) {
                                    $image = $request->file('blog_images');
                                    $imageName = time().'.'.$image->getClientOriginalExtension(); 
                                    $image->move('assets/images/dailyblogs', $imageName);
                                } else {
                                 
                                    $imageName = $request->image_new;
                                }

                                $news = Blog::where('id', $id)->first();

                                if (!$news) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'Blog not found'
                                    ]);
                                }
                               
                                $news->update([
                                    'title' => $request->blog_title,
                                    'slug' => $request->blog_slug,
                                    'meta_title' => $request->meta_title,
                                    'canonical_url' => $request->canonical_url,
                                    'meta_keyword' => $request->meta_keyword,
                                    'meta_desc' => $request->meta_desc,
                                    'description' => $request->blog_description,
                                    'status' => $request->blog_status,
                                    'image' => $imageName
                                ]);
                
                               
                                
                                
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'blog Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }


                public function storepickpage()
                {
                    if ($this->loggedInAdmin) {

                        $storepick = Storepick::orderBy('id', 'desc')->get();
                        $data=Storepick::orderBy('STORE_ID','ASC')->pluck('STORE_ID','STORE_ID');            

                        return view('Admin.storepicklist',['storepick'=>$storepick],['data'=>$data]);

                    }else
                    {
                        return redirect('/setup'); 

                    }

                }
                public function storepickedit($id){
                    if ($this->loggedInAdmin) {
                        $decryptid=\Crypt::decrypt($id);
                        $editstorepick=Storepick::find($decryptid);
    
                        return view('Admin.editstorepick',['editstorepick'=>$editstorepick]);
                    
                    } else {
                        return redirect('/setup');
                    }
                }
                public function editstorepicksave(Request $request)
                {
                    $id=$request->main_id;
                    $decryptid=\Crypt::decrypt($id);
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'STORE_ID' => 'required',
                            'PICK_TEXT' => 'required',
                            'PICK_ID' => 'required',
                            'STORE_INDEX_SEQUENCE' => 'required'
                        ]);
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {
                                $store = Storepick::where('id', $decryptid)->first();
                                if (!$store) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'News not found'
                                    ]);
                                }
                                $store->update([
                                    'STORE_ID' => $request->STORE_ID,
                                    'STORE_TYPE' => $request->STORE_TYPE,
                                    'PICK_TEXT' => $request->PICK_TEXT,
                                    'PICK_ID' => $request->PICK_ID,
                                    'STORE_INDEX_SEQUENCE' => $request->STORE_INDEX_SEQUENCE,
                                    'PICK_TEXT_EXTEND' => $request->PICK_TEXT_EXTEND
                                ]);
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Storepick Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }

                public function storepickdelete($id)
                {
                    if ($this->loggedInAdmin) {
                        $item = Storepick::findOrFail($id);
                        $item->delete();
                        return response()->json(['message' => 'Storepick deleted successfully']);
                    } else {
                        return redirect('/setup'); 
                    }
                }

                public function storepickadd()
                {
                    if ($this->loggedInAdmin) {

                       

                        return view('Admin.storepickadd');

                    }else
                    {
                        return redirect('/setup'); 

                    }

                }

                public function savestorepick(Request $request){
                    if ($this->loggedInAdmin) {
                
                        $validator = Validator::make($request->all(), [
                            'STORE_ID' => 'required',
                            'PICK_TEXT' => 'required',
                            'PICK_ID' => 'required',
                            'STORE_INDEX_SEQUENCE' => 'required'
                        
                        ]);
                        
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray()
                            ]);
                        }
                        else
                        {
                
                                $store = new Storepick();
                                $store->STORE_ID = $request->STORE_ID;
                                $store->STORE_TYPE = $request->STORE_TYPE;
                                $store->PICK_TEXT = $request->PICK_TEXT;
                                $store->PICK_ID = $request->PICK_ID;
                                $store->STORE_INDEX_SEQUENCE =$request->STORE_INDEX_SEQUENCE;
                                $store->PICK_TEXT_EXTEND =$request->PICK_TEXT_EXTEND;
                                $store->save();
                                
                                
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'StorePick Post successfully'
                                ]);
                
                                }
                                
                
                            } else {
                                return redirect('/setup');
                            }
                            }

                public function fatchstorepick(Request $request)
                {
                    if ($this->loggedInAdmin) {
                        $storeId = $request->input('storeId');
                        if($storeId==null)
                        {
                            $storepick = StorePick::get();
                            foreach ($storepick as $pick) {
                                $pick->encrypted_id = \Crypt::encrypt($pick->id);
                            }

                        }
                        else{
                            $storepick = StorePick::where('STORE_ID', $storeId)->get();
                            foreach ($storepick as $pick) {
                                $pick->encrypted_id = \Crypt::encrypt($pick->id);
                            }
                        }
                        return response()->json(['storepick' => $storepick]);

                    }else
                    {
                        return redirect('/setup'); 

                    }

                }

                public function useradminpage()
                {
                    if ($this->loggedInAdmin) {
                        $useradminlist = null;
                        $data=Storepick::where('STORE_ID','Admintype')->pluck('PICK_TEXT','PICK_TEXT');
                        if ($this->admintype == 'admin') {
                            $useradminlist = Admin::where('admintype', 'admin')->get();
                           

                        } elseif ($this->admintype == 'superadmin') {
                            $useradminlist = Admin::all();
                        }
                
                        return view('Admin.useradminlist', ['useradminlist' => $useradminlist],['data' => $data]);
                    } else {
                        return redirect('/setup');
                    }
                }

                public function useradmincreate()
                {
                    if ($this->loggedInAdmin) {

                        return view('Admin.useradmincreate');
                    }
                    else{
                        return redirect('/setup');

                    }
                }

                public function saveuseradmin(Request $request){
                    if ($this->loggedInAdmin) {
            
                    $validator = Validator::make($request->all(), [
                        'email' => 'required',
                        'name' => 'required',
                        'username' => 'required',
                        'password' => 'required',
                        'admin_status'=>'required' 
                    ]);
                    
            
                    
            
                    if ($validator->fails()) {
                        return response()->json([
                            'status' => 400,
                            'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                        ]);
                    }
                    else
                    {
            
                        if ($request->hasFile('admin_images')) {
                            $image = $request->file('admin_images');
                            $imageName = time().'.'.$image->getClientOriginalExtension(); 
                            $image->move('assets/images/Adminimages', $imageName);
                           
                            $useradmintype=null;
                            if ($this->admintype == 'admin') {
                                $useradmintype = 'admin';
                            } elseif ($this->admintype == 'superadmin') {
                                $useradmintype = $request->admin_type;

                            }

                            $Admin = new Admin();
                            $Admin->admintype = $useradmintype;
                            $Admin->email = $request->email;
                            $Admin->name = $request->name;
                            $Admin->username = $request->username;
                            $Admin->password =\Crypt::encrypt($request->password);
                            $Admin->status =$request->admin_status;
                            $Admin->image=$imageName;
                            $Admin->save();
                            
                            } else {
                                return response()->json([
                                    'status' => 400,
                                    'messages' => 'No image uploaded'
                                ]);
                            }
                            return response()->json([
                                'status' => 200,
                                'messages' => 'Admin Add successfully'
                            ]);
            
                            }
                            
            
                        } else {
                            return redirect('/setup');
                        }
                        }

                public function facthadmin()
                {
                    if ($this->loggedInAdmin) {
                    $useradminlist = null;
                    if ($this->admintype == 'admin') {
                        $useradminlist = Admin::where('admintype', 'admin')->get();
                    } elseif ($this->admintype == 'superadmin') {
                        $useradminlist = Admin::all();
                    }
                    return response()->json($useradminlist);

                } else {
                    return redirect('/setup');
                }
                }

                public function adminuseredit($id){
                    if ($this->loggedInAdmin) {
                     $decryptid=\Crypt::decrypt($id);
                        $editadmin=Admin::find($decryptid);
    
                        return view('Admin.adminuseredit',['editadmin'=>$editadmin]);
                    
                    } else {
                        return redirect('/setup');
                    }
                }


                public function editadminusersave(Request $request)
                {
                    $id=$request->main_id;  
                   
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'email' => 'required',
                            'name' => 'required',
                            'username' => 'required',
                            'password' => 'required',
                            'admin_status'=>'required' 
                          
                        ]);
                        
  
                
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {
                                if ($request->hasFile('admin_images')) {
                                    $image = $request->file('admin_images');
                                    $imageName = time().'.'.$image->getClientOriginalExtension(); 
                                    $image->move('assets/images/Adminimages', $imageName);
                                } else {
                                 
                                    $imageName = $request->image_new;
                                }

                                $news = Admin::where('id', $id)->first();

                                if (!$news) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'Admin not found'
                                    ]);
                                }

                                $useradmintype=null;
                                if ($this->admintype == 'admin') {
                                    $useradmintype = 'admin';
                                } elseif ($this->admintype == 'superadmin') {
                                    $useradmintype = $request->admin_type;
    
                                }
                               
                                $news->update([
                                    'admintype' => $useradmintype,
                                    'email' => $request->email,
                                    'name' => $request->name,
                                    'username' => $request->username,
                                    'password' => \Crypt::encrypt($request->password),
                                    'status' => $request->admin_status,
                                    'image' => $imageName
                                ]);
                
                               
                                
                                
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Admin Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }

                public function fatchadmindataajax(Request $request)
                {
                    if ($this->loggedInAdmin) {



                        $storeId = $request->input('storeId');
                        if($storeId==null)
                        {
                            $admindata = Admin::get();
                            foreach ($admindata as $pick) {
                                $pick->encrypted_id = \Crypt::encrypt($pick->id);
                            }
                        }
                        else{
                            $admindata = Admin::where('admintype', $storeId)->get();
                            foreach ($admindata as $pick) {
                                $pick->encrypted_id = \Crypt::encrypt($pick->id);
                            }

                        }
                        foreach ($admindata as $admin) {
                            $admin->password =\Crypt::decrypt($admin->password);
                        }
                        return response()->json(['admindata' => $admindata]);

                    }else
                    {
                        return redirect('/setup'); 

                    }

                }

                public function planlistshow(){
                    if ($this->loggedInAdmin && $this->admintype == 'superadmin') {
                        $plan = Planname::all();
            
                    return view('Admin.planlist',['plan'=>$plan]);
                    } else {
                        return redirect('/setup');
                    }
                }

                public function plancreate(){
                    if ($this->loggedInAdmin && $this->admintype == 'superadmin') {
            
                    return view('Admin.plancreate');
                    } else {
                        return redirect('/setup');
                    }
                }

                public function facthplan()
                {
                    if ($this->loggedInAdmin && $this->admintype == 'superadmin') {
                    $useradminlist = Planname::all();
                    return response()->json($useradminlist);

                } else {
                    return redirect('/setup');
                }
                }

                public function saveplan(Request $request){
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'planname' => 'required',
                            'plan_id' => 'required|unique:planname,plan_id'
                        
                        ]);
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray()
                            ]);
                        }
                        else
                        {
                
                                $plan = new Planname();
                                $plan->plan_id = $request->plan_id;
                                $plan->name = $request->planname;
                                $plan->save();
                                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Plan Add successfully'
                                ]);
                
                                }
                                
                
                            } else {
                                return redirect('/setup');
                            }
                    }

                    public function plandelete($id)
                    {
                        if ($this->loggedInAdmin) {
                            $item = Planname::findOrFail($id);

                            $item->delete();
                            return response()->json(['message' => 'Plan deleted successfully']);
                        } else {
                            return redirect('/setup'); 
                        }
                    }

                    public function planedit($id){
                        if ($this->loggedInAdmin) {
                         $decryptid=\Crypt::decrypt($id);
                            $editplan=Planname::find($decryptid);
        
                            return view('Admin.editplan',['editplan'=>$editplan]);
                        
                        } else {
                            return redirect('/setup');
                        }
                    }

                    public function editplansave(Request $request)
                {
                    $id=$request->main_id;
                    $decryptid=\Crypt::decrypt($id);
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'plan_id' => 'required|unique:planname,plan_id',
                            'planname' => 'required'
                        ]);
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {
                                $store = Planname::where('id', $decryptid)->first();
                                if (!$store) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'News not found'
                                    ]);
                                }
                                $store->update([
                                    'plan_id' => $request->plan_id,
                                    'name' => $request->planname
                                ]);
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Plan Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }



                public function plandetailsshow(){
                    if ($this->loggedInAdmin && $this->admintype == 'superadmin') {
                        $plandetails = Plandetails::all();
                        $keydata=Storepick::where('STORE_ID','key_type')->get();
                        $plandata=Planname::all();



            
                    return view('Admin.plandetailslist',['plandetails'=>$plandetails,'keydata'=>$keydata,'plandata'=>$plandata]);
                    } else {
                        return redirect('/setup');
                    }
                }


                public function editplansearch(Request $request)
                {
                    if ($this->loggedInAdmin) {
                        $key_id = $request->KEY_ID;
                        $plan_id = $request->PLAN_ID;
                        $query = Plandetails::query();

                        if ($plan_id) {
                            $query->where('plan_id', $plan_id);
                        }
                        
                        if ($key_id) {
                            $query->where('key_type', $key_id);
                        }
                        $plandetails = $query->get();

                        foreach ($plandetails as $detail) {
                            $detail->encrypted_id = \Crypt::encrypt($detail->id);
                            $storePick = Storepick::select('PICK_TEXT')
                                ->where('STORE_ID', 'key_type')
                                ->where('PICK_ID', $detail->key_type)
                                ->first();
                            if ($storePick) {
                                $detail->key_type = $storePick->PICK_TEXT;
                            } else {
                                $detail->key_type = null;
                            }

                            // Fetch and assign the plan name
                            $planName = Planname::select('name')
                                ->where('plan_id', $detail->plan_id)
                                ->first();
                            if ($planName) {
                                $detail->plan_id = $planName->name;
                            } else {
                                $detail->plan_id = null;
                            }
                        }

                        return response()->json($plandetails);

                    } else {
                        return redirect('/setup');
                    }
                }

                public function plandetailscreate(){
                    if ($this->loggedInAdmin && $this->admintype == 'superadmin') {
            
                    return view('Admin.plandetailscreate');
                    } else {
                        return redirect('/setup');
                    }
                }

                public function saveplandetails(Request $request){
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'planname' => 'required',
                            'plan_id' => 'required',
                            'price' => 'required'

                        
                        ]);
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray()
                            ]);
                        }
                        else
                        {
                
                                $plan = new Plandetails();
                                $plan->key_type = $request->planname;
                                $plan->plan_id = $request->plan_id;
                                $plan->price = $request->price;
                                $plan->discount = $request->discount;
                                $plan->coupons = $request->coupons;
                                $plan->is_coupons = $request->coupon_status;
                                $plan->save();
                                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Plan Details Add successfully'
                                ]);
                
                                }
                                
                
                            } else {
                                return redirect('/setup');
                            }
                    }

                    public function editplandetails($id){
                        if ($this->loggedInAdmin) {
                         $decryptid=\Crypt::decrypt($id);
                            $editplandetails=Plandetails::find($decryptid);
        
                            return view('Admin.editplandetails',['editplandetails'=>$editplandetails]);
                        
                        } else {
                            return redirect('/setup');
                        }
                    }

                    public function editplandetailssave(Request $request)
                    {
                        $id=$request->main_id;
                        $decryptid=\Crypt::decrypt($id);
                        if ($this->loggedInAdmin) {
                            $validator = Validator::make($request->all(), [
                                'planname' => 'required',
                                'plan_id' => 'required',
                                'price' => 'required'
                            ]);
                            if ($validator->fails()) {
                                return response()->json([
                                    'status' => 400,
                                    'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                                ]);
                            }
                            else
                            {
                                    $store = Plandetails::where('id', $decryptid)->first();
                                    if (!$store) {
                                        return response()->json([
                                            'status' => 404,
                                            'messages' => 'Plan not found'
                                        ]);
                                    }
                                    $store->update([
                                        'key_type' => $request->planname,
                                        'plan_id' => $request->plan_id,
                                        'price' => $request->price,
                                        'discount' => $request->discount,
                                        'coupons' => $request->coupons,
                                        'is_coupons' => $request->coupon_status

                                    ]);
                    
                                    return response()->json([
                                        'status' => 200,
                                        'messages' => 'Plan Details Edit successfully'
                                    ]);
                    
                                    }
    
    
                           
                        } else {
                            return redirect('/setup'); 
                        }
                    }

                    public function customershow(){
                        if ($this->loggedInAdmin) {
                            $customerslist = Users::all();
                            return view('Admin.customerslist', ['customerslist' => $customerslist]);
                        } else {
                            return redirect('/setup');
                        }
                    }

                    public function customersedit($id){
                        if ($this->loggedInAdmin) {
                         $decryptid=\Crypt::decrypt($id);
                            $editCustomers=Users::find($decryptid);
        
                            return view('Admin.editcustomers',['editCustomers'=>$editCustomers]);
                        
                        } else {
                            return redirect('/setup');
                        }
                    }


                    public function editcustomerssave(Request $request)
                {
                    dd($request->all());
                    $id=$request->main_id;
                    $decryptid=\Crypt::decrypt($id);
                    if ($this->loggedInAdmin) {
                        $validator = Validator::make($request->all(), [
                            'email' => 'required|unique',
                            'password' => 'required',
                            'admin_status' => 'required'

                        ]);
                        if ($validator->fails()) {
                            return response()->json([
                                'status' => 400,
                                'messages' => $validator->getMessageBag()->toArray() // Convert messages to array
                            ]);
                        }
                        else
                        {
                                $store = Users::where('id', $decryptid)->first();
                                if (!$store) {
                                    return response()->json([
                                        'status' => 404,
                                        'messages' => 'Customers not found'
                                    ]);
                                }
                                $store->update([
                                    'firstname' => $request->firstname,
                                    'lastname' => $request->lastname,
                                    'email' => $request->email,
                                    'phone' => $request->phone,
                                    'address' => $request->address,
                                    'password' => $request->password,
                                    'activation_key' => $request->activation_key,
                                    'reset_tokens' => $request->reset_tokens,
                                    'otp' => $request->activation_key,
                                    'status' => $request->status

                                ]);
                
                                return response()->json([
                                    'status' => 200,
                                    'messages' => 'Customers Edit successfully'
                                ]);
                
                                }


                       
                    } else {
                        return redirect('/setup'); 
                    }
                }
                




}