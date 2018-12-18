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
 
     <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    

</head>
<body>
<div id="app">

        @yield('content')
       
</div>
    
<script src="/js/app.js"></script>
  
  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
  <!-- bootstap bundle js -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <!-- slimscroll js -->
  <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
  <!-- main js -->
  <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
  <!-- chart chartist js -->
  <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
  <!-- sparkline js -->
  <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
  <!-- morris js -->
  <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script>
  <!-- chart c3 js -->
  <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
  <script src="{{ asset('assets/libs/js/dashboard-ecommerce.js') }}"></script>
</body>
</html>
