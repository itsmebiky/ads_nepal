
@extends('layouts.header')
@section('content')
       

	 
	 <div style="height: 113px;"></div>
 {{-- search and image like crousel in the index page --}}
	 <div class="site-blocks-cover overlay" style="background-image: url('/bikash/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
	   <div class="container">
		 <div class="row align-items-center">
		   <div class="col-12" data-aos="fade">
			 <h1>Search Here</h1>
			 <form action="#">
			   <div class="row mb-3">
				 <div class="col-md-9">
				   <div class="row">
					 {{-- <div class="col-md-6 mb-3 mb-md-0">
					   <input type="text" class="mr-3 form-control border-0 px-4" placeholder="Job title, Location or Company name ">
					 </div> --}}
					 
					 <div class="col-md-12 mb-3 mb-md-0">				 
					   <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="Job Title or Job Category or Location or Company Name ">
			
					</div>

				   </div>
				 </div>
				 <div class="col-md-3">
				   <input type="submit" class="btn btn-search btn-success btn-block" value="Search">
				 </div>
			   </div>
			  
			   
			 </form>
		   </div>
		 </div>
	   </div>
	 </div>
	{{-- end of search and crousel like		 --}}
	 {{-- start of the Latest Jobs finder section --}}
	<div class="site-section">
			<div class="container">
			  <div class="row">
				<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				  <h2 class="mb-5">Latest Jobs</h2>
				</div>
			  </div>
			  
			  <div class="row">
					@if(count($posts) >0 )
					@foreach($posts as $post)
				<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
				<a href="/show/{{$post->id}}" class="h-100 feature-item">
						<img src="{{ route('image.view', $post->ads_image) }}" style="height:150px; width: 220px;">
						<h2 class="my-2">{{$post->company}}</h2>
						<h5>{{$post->title}}</h5>
						<code style="color:red;">Published on: {{$post->created_at->toFormattedDateString()}}</code>
						<button class="btn btn-success disabled">See more...</button>
				
					</a>
				</div>

				@endforeach
							
							@else
							<p>No Jobs Found</p>
							@endif
			  </div>
	  
			</div>
	</div>
	 {{-- end of the latest jobs --}}

	@endsection