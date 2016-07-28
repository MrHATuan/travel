<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{!! asset('assets/img/apple-icon.png') !!}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}" />
	<link rel="stylesheet" href="{!! asset('assets/css/font-awesome.css') !!}">
	<link rel="stylesheet" href="{!! asset('assets/css/pe-icon-7-stroke.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap/bootstrap.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/mystyle/material-kit.css') !!}" />
	<link rel="stylesheet" href="{!! asset('assets/css/mystyle/demo.css') !!}" /> 
	<link rel="stylesheet" href="{!! asset('assets/css/mystyle/login-register.css') !!}" />
	<link rel="stylesheet" href="{!! asset('assets/css/mystyle/hipster_cards.css') !!}">
	<script type="text/javascript" src="{!! asset('assets/jquery/jquery-1.10.2.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/bootstrap/bootstrap.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/login-register.js') !!}"></script>
	

</head>


<body>
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
	                    <img src="{!! asset('assets/img/logo.jpg') !!}"  data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    Du Lịch Bụi
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="#section1" class="btn">
						<i class="fa fa-windows" aria-hidden="true"></i> Tin Mới
					</a>
				</li>
				<li>
					<a href="#section2" class="btn">
						<i class="fa fa-heartbeat" aria-hidden="true"></i> Tin Hot
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if (!Auth::check())
					<li>
						<a href="javascript:void(0)" class="btn" data-toggle="modal" onclick="openLoginModal();">
							<i class="fa fa-sign-in" aria-hidden="true"></i> Login/Register
						</a>
					</li>
				@endif
				@if (Auth::check())
					<li>
						<a href="javascript:void(0)" class="btn" data-toggle="modal" data-target="#newPlan">
							<i class="fa fa-paper-plane" aria-hidden="true"></i> Tạo Kế Hoạch
						</a>
					</li>
					<li>
						<a href="{!! route('getProfile', Auth::user()->name) !!}" class="btn">
							<img src="{{ asset('uploads/avatars/' . Auth::user()->avatar ) }}" style="width: 25px; height: 25px; border-radius: 50%;">
    						{!! Auth::user()->name !!}
						</a>
					</li>
					<li>
						<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog" aria-hidden="true"></i>
    						<b class="caret"></b>
    					</a>
    					<ul class="dropdown-menu">
    						<li><a href="{!! route('getEditProfile', Auth::user()->name) !!}" class="fa fa-user"> Thông Tin Cá Nhân</a></li>
    						<li class="divider"></li>
							<li><a href="{{ url('logout') }}" class="fa fa-sign-out"> Đăng Xuất</a></li>
						</ul>
					</li>
				@endif
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->


<div class="wrapper">
	
		@include('login.login')
		@include('plan.newplan')
		@yield('content')

	
    <footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li>
						<a href="#">
							Mr.HATuan
						</a>
					</li>
					<li>
						<a href="#">
						   About Us
						</a>
					</li>
					<li>
						<a href="#">
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
	<script type="text/javascript" src="{!! asset('assets/jquery/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/bootstrap/bootstrap.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/bootstrap/bootstrap.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/material.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/material-kit.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/js/hipster-cards.js') !!}"></script>

	<script type="text/javascript">
		$().ready(function(){
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
            window_width = $(window).width();
            if (window_width >= 768){
                big_image = $('.wrapper > .header');
				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}
		});
	</script>
</html>
