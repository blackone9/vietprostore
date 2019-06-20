<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')VIETPRO STORE</title>
    <base href="{{asset('')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/client/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/client/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/client/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="assets/client/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="assets/client/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/client/css/style.css">
	<link rel="stylesheet" href="assets/client/css/custome.css">



</head>

<body>
	<!--header -->
	<div class="colorlib-loader"></div>
	<div id="page">
		@include('client.layouts.menu')
        <!-- End menu -->

		@include('client.layouts.slider')
        <!-- End slider -->
        

		@yield('content')
		<!-- end main -->

		<!-- subscribe -->
		@include('client.layouts.subscribe')
		<!--end  subscribe -->
		<!-- footer -->
		@include('client.layouts.footer')
		<!--end  footer -->
	</div>


	<!-- jQuery -->
	<script src="assets/client/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/client/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/client/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/client/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/client/js/jquery.flexslider-min.js"></script>

	<script src="assets/client/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/client/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/client/js/magnific-popup-options.js"></script>

<!-- Stellar Parallax -->
	<script src="assets/client/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="assets/client/js/main.js"></script>

</body>

</html>