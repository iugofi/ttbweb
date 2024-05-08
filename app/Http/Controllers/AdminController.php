<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin; 
use App\Models\News; 
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

                public function getNewsData()
                {
                    if ($this->loggedInAdmin) {
                    $news = News::paginate(10); 
                    return view('User.fatchdata.news_table', compact('news')); 
                } else {
                    return redirect('/setup'); 
                }
                }



}
