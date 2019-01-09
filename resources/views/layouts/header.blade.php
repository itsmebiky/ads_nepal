{{-- <!DOCTYPE HTML>
<!--
	Bikash Theme 
	bikash-adhikari.com.np
	Free for personal and commercial use.
-->
<html>
	<head>
    <title>{{config('app.name')}}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        
        <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!--Custom css-->
        <link rel="stylesheet" href="{{asset('css/style2.css')}}" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <!-- Font Awesome JS -->
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

		
	</head>

	<body class="container-fluid">
       
        @include('layouts.navbar')
        
        @yield('content')

    <script src="{{asset('/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
      $(document).ready(function () {
          $("#sidebar").mCustomScrollbar({
              theme: "bikash theme"
          });

          $('#sidebarCollapse').on('click', function () {
              $('#sidebar, #content, #navbarcollapse').toggleClass('active');
              $('.collapse.in').toggleClass('in');
              $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
      });
  </script>
    </body>
    </html> --}}


    <!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{config('app.name')}}&mdash; Find Anything Anywhere</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('bikash/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('bikash/css/style.css')}}">
    
  </head>
  <body>


        @include('layouts.navbar')
        
        @yield('content')


    <!-- footer started -->
    
  <footer class="site-footer">
            <div class="container">
              
      
              <div class="row">
                <div class="col-md-4">
                  <h3 class="footer-heading mb-4 text-white">About</h3>
                  <p>Weare here for your help to find what you need from jobs to place to rooms to anything.</p>
                  <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                        <ul class="list-unstyled">
                          <li><a href="#">About</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Approach</a></li>
                          <li><a href="#">Sustainability</a></li>
                          <li><a href="#">News</a></li>
                          <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                      <h3 class="footer-heading mb-4 text-white">Categories</h3>
                        <ul class="list-unstyled">
                          <li><a href="#">Full Time</a></li>
                          <li><a href="#">Freelance</a></li>
                          <li><a href="#">Temporary</a></li>
                          <li><a href="#">Internship</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
      
                
                <div class="col-md-2">
                  <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
                    <div class="col-md-12">
                      <p>
                        <a href="#" class="pb-2 pr-2 pl-0"><span><i class="fab fa-facebook-square"></i></span></a>
                        <a href="#" class="p-2"><span><i class="fab fa-twitter"></i></span></a>
                        <a href="#" class="p-2"><span><i class="fab fa-instagram"></i></span></a>
                        
      
                      </p>
                    </div>
                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <p>
                  <!-- copyrightissues -->
                  Copyright &copy; 2018 All Rights Reserved | This template is made by <a href="https://bikash-adhikari.com.np" >Bikash</a>
                  <!-- copright close -->
                  </p>
                </div>
                
              </div>
            </div>
  </footer>
      
          <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('bikash/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('bikash/js/aos.js')}}"></script>
        <script src="{{asset('bikash/js/main.js')}}"></script>

        
      </body>
      </html>