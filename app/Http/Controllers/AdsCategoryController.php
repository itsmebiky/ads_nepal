<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdsCategory;

class AdsCategoryController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = AdsCategory::orderBy('created_at', 'asc')->paginate(10);
        return view('ads_category.view')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
           
        ]);

         //Create AdsCategory
         $adscategory = new AdsCategory;
         $adscategory->title = $request ->input('title');
        //  $adscategory->slug = $request ->input('slug');
         $adscategory->save();

         return back()->with('success','AdsCategory Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = AdsCategory::find($id);
        return view('ads_category.edit')->with('post',$post);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required',
        ]);
         //Update Posts
         
         
         $adscategory = AdsCategory::find($id);
      //die(print_r($adscategory));
         $adscategory->title = $request ->input('title');
        //  $adscategory->slug = $request ->input('slug');
         
         $adscategory->save();
         return back()->with('success','Ads-Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = AdsCategory::find($id);
        $post ->delete();
        return back()->with('success','ads-Category Deleted');
    }
}
