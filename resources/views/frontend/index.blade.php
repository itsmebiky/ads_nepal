@extends('layouts.header')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
		
		<br><br><br>
		<div class="line"></div>
		<div>
	@if(count($posts) >0 )
	@foreach($posts as $post)
		<div class="card" style="width: auto; height:auto;">
		{{-- <img class="card-img-top" src="{{asset('storage/ads_image/' .$post->ads_image)}}"> --}}
		<img class="card-img-top" src="/storage/ads_image/{{$post->ads_image}}">
		
            <div class="card-body">
			<h2>{{$post-> title}}</h2>
			  <p class="card-text">{!!$post-> description!!}</p>
			  <small>Published on: {{$post->created_at}}</small>
              {{-- <a href="#" class="btn btn-primary">see more..</a> --}}
            </div>
		  </div>
		  
		  <br><br><br>
		  <br>
		  <div class="line"></div>
		  @endforeach
		  
		  @else
		<p>No Post Found</p>
		@endif
		</div>
        
		
		
	</div>
</div>

				

	@endsection