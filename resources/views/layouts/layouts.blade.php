<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{!! asset('assets/img/apple-icon.png') !!}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/material-kit.css') !!}" />
	<link rel="stylesheet" href="{!! asset('assets/css/demo.css') !!}" />

	<!-- Login -->
	<link rel="stylesheet" href="{!! asset('assets/css/bootstrap.css') !!}" /> 
	<link rel="stylesheet" href="{!! asset('assets/css/login-register.css') !!}" />
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/font-awesome.css') !!}">
	{{-- <script type="text/javascript" src="{!! asset('assets/jquery/jquery-1.10.2.js') !!}"></script> --}}
	<script type="text/javascript" src="{!! asset('assets/js//bootstrap.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/login-register.js') !!}"></script>


</head>


<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="{!! route('getHome')  !!}">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.jpg"  data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    Du Lịch Bụi
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="" class="btn">
						<i class="fa fa-windows" aria-hidden="true"></i> Tin Mới
					</a>
				</li>
				<li>
					<a href="" class="btn">
						<i class="fa fa-heartbeat" aria-hidden="true"></i> Tin Hot
					</a>
				</li>
				<li>
					<a href="" class="btn">
						<i class="fa fa-th-list" aria-hidden="true"></i> Danh Sách
					</a>
				</li>  
				<li>
					<a href="javascript:void(0)" class="btn" data-toggle="modal" onclick="openLoginModal();">
						<i class="fa fa-sign-in" aria-hidden="true"></i> Login/Register
					</a>
				</li>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->


<div class="wrapper">
	

		@include('login.login')
		@yield('content')

	

    <footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li>
						<a href="">
							Mr.HATuan
						</a>
					</li>
					<li>
						<a href="">
						   About Us
						</a>
					</li>
					<li>
						<a href="">
						   Blog
						</a>
					</li>
	            </ul>
	        </nav>
	        <div class="copyright pull-right">
	            &copy; 2016, made with <i class="fa fa-heart" aria-hidden="true"></i> by Mr.HAT
	        </div>
	    </div>
	</footer>
</div>
</body>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/material.min.js"></script>
	<script type="text/javascript" src="assets/js/material-kit.js"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
		//	materialKit.initSliders();
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

            window_width = $(window).width();

            if (window_width >= 768){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
