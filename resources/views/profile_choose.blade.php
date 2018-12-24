@extends('platform.platform')

@section('content')



@include('header')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								<span>Welcome!</span> Complete your 
                                <!-- can				 -->
                                CV or post a job
							</h1>	
							
								
							<p class="text-white"> <span>You can't go further before you create a profile!</span> </p>
                            You are:
                            <a href="{{route('registration_candidate')}}">Freelancer</a>
<a href="{{route('registration_job')}}">Search for freelancer</a>
						</div>											
					</div>
				</div>
			</section>

		@include('platform.footer')
            
@endsection