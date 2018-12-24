@extends('layouts.app')
@section('content')

<div class="wrapper">
       

<!-- Page Content  -->
<div id="content">
	
	<br><br><br>
	<h1 class="text-center">Posts</h1>
	@if(count($posts) >0 )
		@foreach($posts as $post)
		<div class="well">
		
		{!!Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST','enctype'=>'multipart/form-data', 'class'=>'float-right','onsubmit' => 'ConfirmDelete()'])!!}
		{{Form::hidden('_method','DELETE') }}
		{{Form::submit('Delete',['class'=>'btn btn-danger']) }}
		
		{!!Form::close()!!}
		<a class="btn btn-primary"style="float:right;" href="/admin/backend/{{$post->id}}/edit">Edit</a>
		{{-- <img src="{{ URL::asset("storage/2_ads_nepal1545415923.jpg")}}"> --}}
			{{-- <img src="{{asset('storage/ads_image' .$post->ads_image)}}" style="height:200px; width:200px;"> --}}
			<img src='{{ asset('ads_image/'.$post->ads_image) }}'>
			<h2>{{$post-> title}}</h2>
			<small>Published on: {{$post->created_at}}</small>
			<p>{!!$post-> description!!}</p>
		
		</div>
		@endforeach

		{{$posts->links()}}
		
	@else
	<p>No Post Found</p>
	@endif
</div>
</div>

				

	@endsection
	<script>

			function ConfirmDelete()
			{
			var x = confirm("Are you sure you want to delete?");
			if (x)
			  return true;
			else
			  return false;
			}
		  
		  </script>