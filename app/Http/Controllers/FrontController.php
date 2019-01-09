<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Carbon\Carbon;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        //  $cat = Category::orderBy('created_at','desc')->get();
         $posts = Post::orderBy('created_at', 'desc')->get();
         return view('frontend.index')-> with('posts',$posts);
         // return view('frontend.index');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts= Post::find($id);
        $users = User::find($id);
        $now = new Carbon();
        // dd($nowdate);
        // will use timezone as set with date_default_timezone_set
        // $raw =Post::pluck('deadline','id')->all();
        $raw= $posts->deadline;
        $xplode = explode('-',$raw);
        $year = "$xplode[0]";
        $month ="$xplode[1]";
        $day = "$xplode[2]";
        // dd($xplode);
        // $string = "$xplode[0]-$xplode[1]-$xplode[2]";
        // $deadline= date('Y-m-d',strtotime($string));
        $deadline= new Carbon();
        $deadline->year   = $year;
        $deadline->month  = $month;
        $deadline->day    = $day;
        // $deadline= year($year)-> month->($month)->day($day)->toDateString();
        // dd($deadline->toDateString());
        //start now date
        // $nowdate= $now->toDateString();
        // $xplode1= explode('-',$nowdate);
        // dd($xplode1,$xplode);
        //end now date

        $result = $deadline->diffInDays($now, false);
        if($result<0){
            $result*= -1;
        }
        else {
            return $result;
        }
        return view('frontend.show')->with('posts',$posts)->with('result',$result)->with('users',$users);


    }

   
}
