<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Job Listing') }}</title>
<script src="/js/app.js"></script>
    <!-- Styles
    <link href="/css/app.css" rel="stylesheet"> -->
 
     <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
<!-- new -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/vector-map/jqvmap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}">

<!-- Datatable -->

<link rel="stylesheet" type="text/css" href="{{ asset('/media/css/dataTables.bootstrap4.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/resources/syntax/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/resources/demo.css') }}">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('/media/js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('/media/js/dataTables.bootstrap4.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('/resources/syntax/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('/resources/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
     <!-- jquery 3.3.1 js-->
    <script src="{{ asset('/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstrap bundle js-->
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js-->
    <script src="{{ asset('/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- chartjs js-->
    <script src="{{ asset('/assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>
   
    <!-- main js-->
    <script src="{{ asset('/assets/libs/js/main-js.js') }}"></script>
    <!-- jvactormap js-->
    <script src="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- sparkline js-->
    <script src="{{ asset('/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/sparkline/spark-js.js') }}"></script>
     <!-- dashboard sales js-->
    <script src="{{ asset('/assets/libs/js/dashboard-sales.js') }}"></script>
    	<link rel="stylesheet" href="{{ asset('/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">					
			<link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

</head>
<body>
<div id="app">

        @yield('content')
       
</div>
    

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
