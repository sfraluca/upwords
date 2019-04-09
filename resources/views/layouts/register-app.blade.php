<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Upwords') }}</title>

    <!-- Styles
    <link href="/css/app.css" rel="stylesheet"> -->
	<link rel="icon" type="image/png" href="{{ asset('css/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/main.css') }}">
    

</head>
<body>
<div id="app">

        @yield('content')
       
</div>
<script src="/css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/vendor/bootstrap/js/popper.js"></script>
	<script src="/css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/vendor/daterangepicker/moment.min.js"></script>
	<script src="/css/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/css/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/css/js/main.js"></script>
</body>
</html>
