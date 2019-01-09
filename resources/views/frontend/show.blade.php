@extends('layouts.header')
@section('content')

<br><br><br>
	<!-- Page Content  -->
	<div class="container-fluid">
		
        <br><br>
        <div class="container unit-5 overlay" style="background-image: url('/bikash/images/hero_1.jpg');">
            <div class="container text-center">
              <h2 class="mb-0">Advertisement place</h2>
              <p class="mb-0 unit-6"><a href="#">Your Ads Here</a></p>
            </div>
          </div><br>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
                <div class="container jumbotron">
                        <img src='{{ route('image.view', $posts->ads_image) }}' style="display:block; margin-left:auto; margin-right:auto; margin-top:80px; height:50%; width:50%; border:10px solid silver;border-radius:10px;">
                        <br><br> 
                        <div style="margin-left:30%;">
                        
                        <h2>{{$posts->title}}</h2>
                        <p>Company :: {{$posts->company}}</p>
                        <p>Address :: {{$posts->address}}</p>
                        <p>Phone Number :: {{$posts->phone1}}</p>
                        <p>Mobile Number :: {{$posts->phone2}}</p>
                        {{-- <h4>{{$posts->categories}}</h4> --}}
                        <p>{!!$posts->description!!}</p>
                        <code>Published on: {{$posts->created_at->toFormattedDateString() }}</code>
                        <br><code>Deadline: {{$result}} Days Remaining</code>
                        <br><br>
                        <p><button class="btn btn-primary">Contact at :   {{$posts->email}}</button> </p>
                        </div>
                        <br><br><br>
                        <div class="comments" >
                            <h1>Comments</h1>
                            <ul class="list-group">
                                @foreach($posts->comments as $comments)
                               
                                <li class="list-group-item text-justify">
                                  
                                <img src="{{$comments->user_avatar}}" style="height:50px; width:50px;">
                                  <strong><b>{{$comments->user_name}}</b> : &nbsp;</strong>   
                                   <span><i>{{ $comments->body }}</i></span>
                                   <code> &nbsp; {{$comments->created_at->diffForHumans()}} </code>
                                </li>
                               
                                @endforeach
                            </ul>
                        </div>
                        <div class="my-2">
                        <form method="POST" action="/show/{{$posts->id}}/comments">
                            
                            {{ csrf_field() }}
                            @if(Auth::check())
                                    <div class="form-group">
                                        <textarea name="body" placeholder="Your Comment Here" class="form-control"></textarea>
                                    </div>
                                <input type="hidden" name="post_id" value="{{$posts->id}}">                            
                                <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
                                <input type="hidden" name="user_avatar" value="{{Auth::user()->user_avatar}}">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </div>
                    
                            @else
                            
                            <div class="form-group">
                            <input type="hidden" name="post_id" value="{{$posts->id}}">
                           <b style="color: blue; font-size:1.2em;"> <a href="/login/google" ><img src="/bikash/images/btn_google.png" style="height:10%; width:30%"></a>  or   <a href="login/google"> <img src="/bikash/images/btn_facebook.png" style="height:20%; width:30%;"></a> To Comment On this Post</b>
                            
                                </div>
                            
                            @endif

                            </form>
                        </div>
                    </div>
          </div>
          <div class="col-md-2"></div>
        </div>
	</div>

				

	@endsection