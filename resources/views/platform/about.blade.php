@extends('platform.platform')

@section('content')

@include('platform.header')


<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								@lang('header.about')		
							</h1>	
							<p class="text-white link-nav"><a href="{{route('website', app()->getLocale())}}">@lang('header.home') </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('about')}}">@lang('header.about')</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>@lang('header.why')</h1>
							<p>
								@lang('header.why_desc')
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>@lang('header.dashboard')Expert Technicians</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>@lang('header.dashboard')Professional Service</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>@lang('header.dashboard')Great Support</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>@lang('header.dashboard')Technical Skills</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>@lang('header.dashboard')Highly Recomended</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>@lang('header.dashboard')Positive Reviews</h4>
								<p>
									@lang('header.dashboard')Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->						

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/pages/f1.jpg" alt="">
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">@lang('header.dashboard')Basic & Common Repairs</h6>
							<h1>@lang('header.dashboard')Who we are</h1>
							<p>
								@lang('header.dashboard')Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
							</p>
						</div>
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/pages/f2.jpg" alt="">							
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">@lang('header.dashboard')Basic & Common Repairs</h6>
							<h1>@lang('header.dashboard')What we do</h1>
							<p>
								@lang('header.dashboard')Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

			
			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
							<h1 class="mb-10 text-white">@lang('header.join')</h1>
								<p class="text-white">@lang('header.join_prez')</p>
								<a class="primary-btn" href="#">@lang('header.search_job')</a>
								<a class="primary-btn" href="#">@lang('header.search_freelancer')</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start testimonial Area -->
			
		
		@include('platform.footer')
            
@endsection