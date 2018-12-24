@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
		
		<br><br><br><br><br><br><br>
        
            {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Advertisement Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description','Description')}}
                    {{Form::textarea('description','',['class'=>'form-control ckeditor','placeholder'=>'Advertisement description'])}}
                </div>
                <div class="form-group">
                        {{Form::file('ads_image')}}
                </div>
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
	</div>
</div>

		

    @endsection
   