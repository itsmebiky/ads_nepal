<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
	


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		
     <link rel="stylesheet" href="{{asset('css/style2.css')}}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
            @include('layouts.bnavbar')
			<div class="container">
				
			@include('layouts.message')
			@yield('content')
			</div>
    </div>

    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
     <script>
         $('textarea').ckeditor();
         // $('.textarea').ckeditor(); // if class is prefered.
     </script>
</body>
</html>
