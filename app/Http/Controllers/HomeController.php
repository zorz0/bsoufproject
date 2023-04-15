<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $latestBlogs=Blog::orderBy('id','desc')->take(3)->get();
        // dd($latestBlogs);
        // return view('front.home',compact('latestBlogs'));
        return view('front.home',['latestBlogs'=>$latestBlogs]);
    }
    public function blogs()
    {

        $latestBlogs=Blog::orderBy('id','desc')->paginate(3);
        $Blogs=Blog::orderBy('id','asc')->paginate(3);
        // dd($latestBlogs);
        // return view('front.home',compact('latestBlogs'));
        return view('front.news',['latestBlogs'=>$latestBlogs,'blogs'=>$Blogs]);
    }
    public function blogDetails(Blog $id)
    {
        $blog=$id;
        // dd($blog);
        return view('front.newsDetails',['blog'=>$blog]);
    }
}
