<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
   <title>{{ config('app.name', 'Upwords') }}</title>

    <!-- Styles
    <link href="/css/app.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
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

        @yield('content')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
		
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset('/js/vendor/bootstrap.min.js') }}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset('/js/easing.min.js') }}"></script>			
			<script src="{{ asset('/js/hoverIntent.js') }}"></script>
			<script src="{{ asset('/js/superfish.min.js') }}"></script>	
			<script src="{{ asset('/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>	
			<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>			
			<script src="{{ asset('/js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('/js/jquery.nice-select.min.j') }}s"></script>			
			<script src="{{ asset('/js/parallax.min.js') }}"></script>		
			<script src="{{ asset('/js/mail-script.js') }}"></script>	
			<script src="{{ asset('/js/main.js') }}"></script>	
			
		
		
</body>
</html>

