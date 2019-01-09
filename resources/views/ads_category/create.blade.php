@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
        <br><br><br><br><br><br><br>
    {!! Form::open(['action'=>'AdsCategoryController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Ads-Category Title'])}}
            {{-- {{Form::label('slug','Slug')}}
            {{Form::text('slug','',['class'=>'form-control','placeholder'=>'Ads-Category Slug'])}} --}}
        </div>
        {{Form::submit('Add Ads-Category',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
    </div>

		

    @endsection
   