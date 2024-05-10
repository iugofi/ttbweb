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

                    $editnews=News::find($id);

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
            
                                $editblog=Blog::find($id);
            
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

                public function fatchstorepick(Request $request)
                {
                    if ($this->loggedInAdmin) {



                        $storeId = $request->input('storeId');
                        if($storeId==null)
                        {
                            $storepick = StorePick::get();

                        }
                        else{
                            $storepick = StorePick::where('STORE_ID', $storeId)->get();

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

                        
                        if($this->admintype=='admin')
                        {
                            $useradminlist=Admin::where('admintype','admin');

                        }
                        else if($this->admintype=='superadmin'){
                            $useradminlist=Admin::where('admintype','superadmin');
                        }

                        return view('Admin.useradminlist',['useradminlist'=>$useradminlist]);

                    }else
                    {
                        return redirect('/setup'); 

                    }

                }




}
