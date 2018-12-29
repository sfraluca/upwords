<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSRF Token -->
   <title>{{ config('app.name', 'Upwords') }}</title>

    <!-- Styles
    <link href="/css/app.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">					
			<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('css/main.css') }}">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
<
</head>

<body>



@include('menu')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								Search for a job				
							</h1>	
							
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development and many other profession area. Navigate and see what we offer.</p>
						
														
					</div>		</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<section class="post-area section-gap">
				<div class="container">
				<h1 class="text-center">Search live for jobs</h1>
				<h3>Total Data: <span id="total_records"></span></h3>
				<br>
			
			
							<br>
							<table>
							<thead>
							<th>Name</th>
							</thead>
								<tbody>
								
								</tbody>
							</table>
					
						
						

									

					</div>
				</div>	
			</section>
			<!-- End post Area -->

		
            
		@include('platform.footer')
            		
</body>
</html>
        
		
<script>

$(document).ready(function(){
	fetch_customer_data();
	function fetch_customer_data(query = '')
	{
		$.ajax({
			url:"{{route('job_action')}}",
			method:'GET',
			data:{query:query },
			dataType:'json',
			success:function(data)
			{
				$('tbody').html(data.table_data);
				$('#total_records').text(data.total_data);
			}
		})
	}
$(document).on('keyup','#search', function(){
	var query = $(this).val();
	
	fetch_customer_data(query);
});
});




</script>