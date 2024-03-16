<!DOCTYPE html>
<html lang="en">

<head>
	<title>TasteRest - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.timepicker.css')}}">


	<link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>
<body>

<!-- Start header -->
   @include('frontend.body.header')
<!-- End header -->
<!-- Start hero -->
   {{-- @include('frontend.body.hero') --}}
<!-- End hero -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('backend/assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-5">
          <h1 class="mb-2 bread">Blog Single</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{route('all.blog')}}">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<!-- Start Blogs -->
@include('frontend.home.blog_details')
<!-- End Blogs -->

<!-- Start footer-->
   @include('frontend.body.footer')
<!-- End footer-->
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.timepicker.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('frontend/assets/js/google-map.js')}}"></script>
		<script src="{{asset('frontend/assets/js/main.js')}}"></script>

	</body>
	</html>
