<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="grabville.io" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{url('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{url('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{url('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://plugins.chynodeluxe.com/dlx-quiz/assets/css/main.min.css'>

	<link rel="stylesheet" href="{{url('css/responsive.css')}}" type="text/css" />


	<!-- Document Title
	============================================= -->
	<title>About Us | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{url('/')}}" class="standard-logo">Trivia-Track</a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
						<ul>
								<li><a href="{{url('/')}}/type/all"><div>Max All Categories</div></a></li>
								@foreach($categories as $c)
									<li><a href="{{url('/')}}/type/<?php echo strtolower($c->name);?>"><div>{{$c->name}}</div></a></li>
								@endforeach
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 150px 0; background: linear-gradient(rgba(3, 3, 3, 0.55), rgba(3, 3, 3, 0.95)), url({{url('img/parallax.jpg')}}) no-repeat center center fixed; background-size: cover; background-position: center center;min-height: 100vh">
				@yield('content')
		</section><!-- #page-title end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{url('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{url('js/functions.js')}}"></script>
	@yield('js')

</body>
</html>
