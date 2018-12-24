@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
		
        <br><br><br><br><br><br><br>
        <h1>Edit Post</h1>
        
            {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST']) !!}
                <div class="form-group">
                    
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$post->title ,['class'=>'form-control','placeholder'=>'Advertisement Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description','Description')}}
                    {{Form::textarea('description',$post->description,['class'=>'form-control ckeditor','placeholder'=>'Advertisement description'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
	</div>
</div>

				

	@endsection