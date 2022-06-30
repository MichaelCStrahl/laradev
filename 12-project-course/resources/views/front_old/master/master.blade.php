<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learn &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	{!! $head ?? '' !!}

	{{-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@400;700&display=swap" rel="stylesheet">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url(mix('front/assets/css/vendor.css')) }}">
	<link rel="stylesheet" href="{{ url(mix('front/assets/css/style.css')) }}">

	<!-- Modernizr JS -->
	<script src="{{ url(mix('front/assets/js/modernizr.js')) }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ url(mix('front/assets/js/respond.js')) }}"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- Plugins -->
    <script src="{{ url(mix('front/assets/js/vendor.js')) }}"></script>
	<!-- Main -->
    <script src="{{ url(mix('front/assets/js/main.js')) }}"></script>

	</body>
</html>
