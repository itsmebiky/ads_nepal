@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
        <br><br><br><br><br>

        <h1 class="text-center">Categories List</h1>
        @if(count($posts) >0 )
            @foreach($posts as $post)
            <div class="well bg-success">
            
            {!!Form::open(['action'=> ['CategoryController@destroy',$post->id],'method'=>'POST', 'class'=>'float-right','onsubmit' => 'ConfirmDelete()'])!!}
            {{Form::hidden('_method','DELETE') }}
            {{Form::submit('Delete',['class'=>'btn btn-danger']) }}
            
            {!!Form::close()!!}
            <a class="btn btn-primary"style="float:right;" href="/admin/backend/category/{{$post->id}}/edit">Edit</a>
            {{-- <img src="{{ URL::asset("storage/2_ads_nepal1545415923.jpg")}}"> --}}
                

            <h2 class="text-justify">-->> {{$post->title}}</h2>
            
            </div>
            @endforeach
    
            {{$posts->links()}}
            
        @else
        <p>No Post Found</p>
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
   