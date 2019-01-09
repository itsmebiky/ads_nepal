@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
        <br><br><br><br><br><br><br>
        <h1>Edit Ads-Category</h1>
       
            {!! Form::open(['action'=>['AdsCategoryController@update', $post->id], 'method'=>'POST']) !!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$post->title ,['class'=>'form-control','placeholder'=>'AdsCategory Title'])}}

                    {{Form::label('slug','Slug')}}
                    {{Form::text('slug',$post->title ,['class'=>'form-control','placeholder'=>'AdsCategory slug'])}}
                </div>
              
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
    </div>

		

    @endsection
   