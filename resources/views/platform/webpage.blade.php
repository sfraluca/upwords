@extends('platform.platform')

@section('content')

@include('platform.header')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								<span>{{$freelancers}}+</span> @lang('header.freelancers')				
							</h1>	
							
							<p class="text-white"> <span>@lang('header.dashboard')Search by tags:</span> @lang('header.subtitle')</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start features Area -->
			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>@lang('header.search')</h4>
								<p>
									@lang('header.search_prez')
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>@lang('header.profession')</h4>
								<p>
									@lang('header.profession_prez')
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>@lang('header.skills')</h4>
								<p>
									@lang('header.skill_prez')
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>@lang('header.contact')</h4>
								<p>
									@lang('header.contact_prez')
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			
			<!-- Start popular-post Area -->
			<section class="popular-post-area pt-100">
				<div class="container">
                <h1>@lang('header.best_free')</h1>
					<div class="row align-items-center">
						<div class="active-popular-post-carusel">
						@foreach ($candidates as $candidate)
							<div class="single-popular-post d-flex flex-row">
								
								<div class="details">
									<a href="#"><h4>{{$candidate->name}}</h4></a>
									<h6>{{$candidate->slug}}</h6>
									<p>
									@lang('header.employment_type'): {{$candidate->emplyment_type}}</p>
									<p>
									@lang('header.price'): {{$candidate->price}}$/h</p>
								
									<a class=" text-uppercase text-right" href="{{route('login', app()->getLocale())}}">@lang('header.see')</a>
								</div>
							</div>	
							@endforeach
																																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-post Area -->
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">@lang('header.profession_are')</h1>
								<p>@lang('header.profession_prezentation')</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o1.png" alt="">
								
								<p>@lang('header.development')</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o2.png" alt="">
								
								<p>@lang('header.writing')</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o3.png" alt="">
								
								<p>@lang('header.it')</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o4.png" alt="">
								
								<p>@lang('header.media')</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o5.png" alt="">
								
								<p>@lang('header.legal')</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o6.png" alt="">
								
								<p>@lang('header.design')</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">@lang('header.recent')</a></li>
							</ul>
							@foreach ($jobs as $job)
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">
										<li>
											<a href="#">
                                                {{$job->skill}}
                                               </a>
										</li> 
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{route('login')}}">See</a></li>
										</ul>
									</div>
									<h5>@lang('header.employment_type'): {{$job->employment_type}}</h5>
									<h5>@lang('header.profession'):
                                                {{$job->profession}}
											</h5>
									<p class="address"><span class="lnr lnr-map"></span>@lang('header.name'): {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-map"></span>@lang('header.contact'): {{$job->contact}}</p>
									<p class="address"><span class="lnr lnr-database"></span>@lang('header.price'): {{$job->price}}$/h</p>
								</div>
							</div>
							@endforeach													
							
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="{{route('login', app()->getLocale())}}">@lang('header.view')</a>
                           
						</div>
						 <p><span>@lang('header.first')</span></p>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">@lang('header.join')</h1>
								<p class="text-white">@lang('header.join_prez')</p>
								<a class="primary-btn" href="{{route('register', app()->getLocale())}}">@lang('header.search_job')</a>
								<a class="primary-btn" href="{{route('register', app()->getLocale())}}">@lang('header.search_freelancer')</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start download Area -->
			
			<!-- End download Area -->
		
		@include('platform.footer')
            
@endsection