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
								<span>@lang('header.welcome_to_app')</span> {{ Auth::user()->name }}
							</h1>	

			</section>
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
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10"><h1 class="mb-10">@lang('header.all_are')</h1>
								<p>@lang('header.are_prez')</p>
							</div>
						</div>
					</div>						
					<div class="row">@foreach ($profession as $p)
						<div class="col-lg-2 col-md-4 col-sm-6">
						
							<div class="single-fcat">
								
								
								<p>{{$p->profession}}</p>
							</div>
							
						</div>@endforeach
																																
					</div>																						
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">@lang('header.recent')</a></li>
							</ul>
							@foreach ($jobs_recent as $job)
                                           
                                           
							<div class="single-post d-flex flex-row">
								<div class="thumb">
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
											<li><a href="{{route('contact_vacancy', [app()->getLocale(),$job->id])}}">@lang('header.contact')</a></li>
											@can('show-vacancy')
											<li><a href="{{route('profile_job', [app()->getLocale(), $job->id])}}">@lang('header.see')</a></li>
											@endcan()
											<li><a href="{{route('compare', [app()->getLocale(), $job->id])}}">@lang('header.compare')</a></li>
											
										</ul>
									</div>
									<p>
										{{ substr(strip_tags($job->description), 0,80)}}{{ strlen(strip_tags($job->description)) > 80 ? '...' : ""}}
										<!-- * -->
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
						</div>
						
					</div>
				</div>	
			</section>
		@include('platform.footer')
            
@endsection