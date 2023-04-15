<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
        // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index (){
        $blogs= Blog::all();
        return view('admin.Posts.allPosts',['blogs'=> $blogs]);
    }

 public function create()
{
    return view('admin.Posts.addPost');
}


    public function store (Request $request){
// dd(auth()->user()->id);
$request->validate([
    'title' => 'required',
    'image' => 'required'
]);
$imageName=md5(microtime()).$request->image->getClientOriginalName();
$request->image->storeAs("public/imgs",$imageName);
Blog::create([
    'user_id'=>auth()->user()->id,
    'title' => $request->title,
    'image' => $imageName,
    'description'=>$request->description,

]);
$blogs=Blog::all();
        return redirect(route('posts.index' ,[ 'blogs'=>$blogs]));
    }

    public function edit(Blog $id){

        return view("admin.Posts.editPost",['blog'=>$id ]);

    }

    public function update(Request $request, Blog $id){
        $blogs= Blog::all();

        if($request->image ){

            $imageName=md5(microtime()).$request->image->getClientOriginalName();
            $request->image->storeAs("public/imgs",$imageName);
            Blog::where('id',$id->id)->update(
                [ 'title'=> $request->title,
                'image'=> $imageName,

            ]);
        }else{
            Blog::where('id',$id->id)->update(
                [ 'title'=> $request->title,

            ]);
        }
        return redirect(route('posts.index' ,[ 'blogs'=>$blogs]));

    }

    public function destroy(Blog $id){

        Blog::where('id',$id->id)->delete();

        return back();

    }
}
