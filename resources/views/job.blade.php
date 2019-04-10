

@extends('platform.platform')

@section('content')



@include('menu')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								@lang('header.search_job')				
							</h1>	
							
							<p class="text-white"> <span>@lang('header.dashboard')Search by tags:</span> @lang('header.dashboard')Tecnology, Business, Consulting, IT Company, Design, Development and many other profession area. Navigate and see what we offer.</p>
						
														
					</div>		</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<section class="post-area section-gap">
				<div class="container">

					<div class="row justify-content-center d-flex">
					
						<div class="col-lg-8 post-list">
						<ul class="cat-list">
								<li><a href="{{route('month', app()->getLocale())}}">31 @lang('header.days')</a></li>
								<li><a href="{{route('week', app()->getLocale())}}">7 @lang('header.days')</a></li>
								<li><a href="{{route('day', app()->getLocale())}}">1 @lang('header.days')</a></li>
								<li><a href="{{route('job', app()->getLocale())}}">@lang('header.all_job')</a></li>
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
											<li><a href="{{route('contact_vacancy', [$job->id, app()->getLocale()])}}">@lang('header.contact')Contact</a></li>
											<li><a href="{{route('compare', [$job->id, app()->getLocale()])}}">@lang('header.see')</a></li>
										</ul>
									</div>
									<p>
									{{$job->description}}
									</p>
									<h5>@lang('header.employment_type'): {{$job->employment_type}}</h5>
									<h5>@lang('header.contact'): {{$job->contact}}</h5>
									<h5>
                                                {{$job->profession}}
                                               </h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->price}}</p>
								</div>
							</div>
									@endforeach	
									<div class="text-center" style="float: right;">{{ $jobs->links('vendor.pagination.bootstrap-4') }}</div>
	
																		
						</div>
						
						

									

					</div>
				</div>	
			</section>
			<!-- End post Area -->

		
            
		@include('platform.footer')
            
            @endsection
		