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
								@lang('header.complete_cv')
							</h1>	
							
								
							<p class="text-white"> <span>@lang('header.complete_sub')</span> </p>
</div>											
					</div>
				</div>
			</section>

			<section class="section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
                          <h1>@lang('header.midle_create')</h1> 
						  	</div>
						</div>
					</div>	
				</div>	
			</section>
						
	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white"> @lang('header.create')</h1>
								<a class="primary-btn" href="{{route('registration_candidate', app()->getLocale())}}">@lang('header.search_job')</a>
								<a class="primary-btn" href="{{route('registration_job', app()->getLocale())}}">@lang('header.search_freelancer')</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
		@include('platform.footer')
            
@endsection