@extends('layouts.app')
@section('content')

<div>
       

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
			{{-- <img src="{{asset('/storage/ads_image'.$post->ads_image)}}" style="height:200px; width:200px;"> --}}
			<img src='{{ route('image.view', $post->ads_image) }}' style="height:200px; width:500px;">
			<h2>{{$post->title}}</h2>
			<h1><code>{{$post->company}}</code></h1>
			<h2>{{$post->title}}</h2>
			<p>Address :: {{$post->address}}</p>
			<p>Phone Number :: {{$post->phone1}}</p>
			<p>Mobile Number :: {{$post->phone2}}</p>
			{{-- <h4>{{$posts->categories}}</h4> --}}
			<h3>Description</h3> <p>{!!$post->description!!}</p>
			<code>Published on: {{$post->created_at->toFormattedDateString() }}</code>
			<p>Apply Now@ {{$post->email}}</p>
					
			{{-- <code>Deadline: {{$result}} Days Remaining</code> --}}
			<p>{{$post-> categories}}</p>

		</div>
		<hr style="border: 4px dotted green; width:auto;">
		
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