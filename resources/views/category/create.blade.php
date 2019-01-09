@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
        <br><br><br><br><br><br><br>
    {!! Form::open(['action'=>'CategoryController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Category Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('slug','Slug')}}
            {{Form::text('slug','',['class'=>'form-control','placeholder'=>'Slug'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

		

    @endsection
   