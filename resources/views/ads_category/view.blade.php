@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
        <br><br><br><br><br>

        <h1 class="text-center">Ads-Categories List</h1>
        @if(count($posts) >0 )
            @foreach($posts as $posts)
            <div class="well bg-primary">
            {!!Form::open(['action'=> ['AdsCategoryController@destroy',$posts->id],'method'=>'POST', 'class'=>'float-right','onsubmit' => 'ConfirmDelete()'])!!}
            {{Form::hidden('_method','DELETE') }}
            {{Form::submit('Delete',['class'=>'btn btn-danger']) }}
            
            {!!Form::close()!!}
            <a class="btn btn-success"style="float:right;" href="/admin/backend/adscategory/{{$posts->id}}/edit">Edit</a>
            {{-- <img src="{{ URL::asset("storage/2_ads_nepal1545415923.jpg")}}"> --}}
                

            <h2 class="text-justify">Title: {{$posts->title}}</h2>
            <h3 class="text-justify">Slug: {{$posts->slug}}</h3>
            
            </div>
            @endforeach
    
            {{-- {{$posts->links()}} --}}
            
        @else
        <p>No AdsCategory Found</p>
        @endif
    </div>
    </div>

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

    @endsection
   