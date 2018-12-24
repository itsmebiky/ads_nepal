<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class FrontendController extends Controller
{
    public function home(){
        // $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('frontend.index')-> with('posts',$posts);
        // return view('frontend.index');
    }
    public function aboutus(){
        return view('frontend.aboutus');
    }
    public function contactus(){
        return view('frontend.contactus');
    }
}
