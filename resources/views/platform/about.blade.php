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
							<p class="text-white link-nav"><a href="{{route('website', app()->getLocale())}}">@lang('header.home') </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('about', app()->getLocale())}}">@lang('header.about')</a></p>
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
								<h4><span class="lnr lnr-user"></span>@lang('header.expert')</h4>
								<p>
									@lang('header.expert_prez')
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>@lang('header.service')</h4>
								<p>
									@lang('header.service_prez')
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>@lang('header.support')</h4>
								<p>
									@lang('header.support_prez')
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>@lang('header.technical_skill')</h4>
								<p>
									@lang('header.technical_prez')
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>@lang('header.recomended')</h4>
								<p>
									@lang('header.recom_prez')
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>@lang('header.reviews')</h4>
								<p>
									@lang('header.reviews_prez')
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
							<img class="img-fluid" src="/img/pages/f1.jpg" alt="">
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">@lang('header.steps')</h6>
							<h1>@lang('header.steps_know')</h1>
							<p>
								@lang('header.steps_prez')
							</p>
						</div>
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="/img/pages/f2.jpg" alt="">							
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">@lang('header.compare_style')</h6>
							<h1>@lang('header.compare_know')</h1>
							<p>
								@lang('header.compare_prez')
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
								<a class="primary-btn" href="#">@lang('header.register')</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start testimonial Area -->
			
		
		@include('platform.footer')
            
@endsection