<!DOCTYPE html>
<html lang="en">
	
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>eCommerce Shop</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
	    
	    <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/frontend/css/blue.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.transitions.css')}}">
		<link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/frontend/css/rateit.css')}}">
		<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap-select.min.css')}}">

		

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.css')}}">
		{{-- // <link rel="stylesheet" href="{{asset('assets/frontend/css/cfont-awesome.css')}}"> --}}

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('layout.header')
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="row">
<!-- ============================================== SIDEBAR ============================================== -->	
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
<!-- ================================== TOP NAVIGATION ================================== -->
@include('layout.categorynav')
<!-- ================================== TOP NAVIGATION : END ================================== -->

<!-- ============================================== HOT DEALS ============================================== -->
@include('layout.hotdeals')
<!-- ============================================== HOT DEALS: END ============================================== -->


<!-- ============================================== SPECIAL OFFER ============================================== -->
@include('layout.specialoffer')
<!-- ============================================== SPECIAL OFFER : END ============================================== -->

<!-- ============================================== PRODUCT TAGS ============================================== -->
@include('layout.producttags')
<!-- ============================================== PRODUCT TAGS : END ============================================== -->

<!-- ============================================== SPECIAL DEALS ============================================== -->
@include('layout.specialdeals')
<!-- ============================================== SPECIAL DEALS : END ============================================== -->

<!-- ============================================== NEWSLETTER ============================================== -->
@include('layout.newsletter')
<!-- ============================================== NEWSLETTER: END ============================================== -->
		
@include('layout.testimonials')
<!-- ============================================== Testimonials: END ============================================== -->

<div class="home-banner">
<img src="{{asset('assets/frontend/images/banners/LHS-banner.jpg')}}" alt="Image">
</div> 



</div><!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->

		<!-- ============================================== CONTENT ============================================== -->
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			
<!-- ========================================== SECTION – HERO ========================================= -->
@include('layout.hero')
<!-- ========================================= SECTION – HERO : END ========================================= -->	

<!-- ============================================== INFO BOXES ============================================== -->
@include('layout.infobox')
<!-- ============================================== INFO BOXES : END ============================================== -->

@yield('content')



<!-- ============================================================= FOOTER ============================================================= -->
@include('layout.footer')
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="{{asset('assets/frontend/js/jquery-1.11.1.min.js')}}"></script>
	
	<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
	
	<script src="{{asset('assets/frontend/js/bootstrap-hover-dropdown.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	
	<script src="{{asset('assets/frontend/js/echo.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.easing-1.3.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/scripts.js')}}"></script>


</body>

</html>