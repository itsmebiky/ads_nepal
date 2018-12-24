<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
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
        return view('backend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createpost');
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
            'description'=> 'required',
            'ads_image'=> 'required|image|max:1999',
        ]);
        //handle file upload
        if($request->hasFile('ads_image')){
            //get filename with extension
            $fileNameWithExt = $request->file('ads_image')->getClientOriginalName();
            //get just filename
            // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('ads_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore =  'ads_nepal' . '_' . time() . '.' .$extension;
            //upload image 
            $path = $request->file('ads_image')->storeAs('public/ads_image',$fileNameToStore);

        }else {
            $fileNameToStore ='noimage.jpg';
        }
         //Create Posts
         $post = new Post;
         $post->title = $request ->input('title');
         $post->description = $request ->input('description');
         $post->ads_image= $fileNameToStore;
         $post->save();

         return redirect('admin/backend/create')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$posts= Post:: all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.viewpost')-> with('posts',$posts);
        // return view('frontend.index')-> with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.edit')->with('post',$post);
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
            'description'=> 'required',
        ]);
         //Update Posts
         
         
         $post = Post::find($id);
      //die(print_r($post));
         $post->title = $request ->input('title');
         $post->description = $request ->input('description');
         
         $post->save();
         return redirect('admin/backend/show')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();
        return redirect('admin/backend/show')->with('success','Post Deleted');
    }
}
