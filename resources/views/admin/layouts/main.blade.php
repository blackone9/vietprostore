<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị - Store</title>
    <base href="{{asset('')}}">
	<!-- css -->
	<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="assets/admin/css/styles.css" rel="stylesheet">
	<!--Icons-->
	<link rel="stylesheet" href="assets/admin/Awesome/css/all.css">
</head>
<body>
	<!-- header -->
	@include('admin.layouts.header')
	<!-- header -->
	<!-- sidebar left-->
	@include('admin.layouts.menu')
	<!--/. end sidebar left-->

	<!--main-->
	@yield('content')
	<!--end main-->

	<!-- javascript -->
	<script src="assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="assets/admin/js/bootstrap.min.js"></script>
	<script src="assets/admin/js/chart.min.js"></script>
	<script src="assets/admin/js/chart-data.js"></script>
	<script src="assets/admin/js/lumino.glyphs.js"></script>

	@stack('js')
</body>

</html>