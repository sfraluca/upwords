@extends('platform.platform')

@section('content')



<header id="header" id="home">
			    <div class="container">
						
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
				      </div><h4 class="text-white">{{ Auth::user()->name }}</h4>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">	@include('layouts.search-bar')
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
														href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale,$cand->id]) }}"
														@if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
										</li>
								@endforeach
								
				          <li class="menu-active"><a href="{{ route('home', app()->getLocale()) }}">@lang('header.home')</a></li>
									@can('create-vacancy') 
									<li class="menu-active"><a href="{{ route('registration_job', app()->getLocale()) }}">@lang('header.post_job')</a></li>
									@endcan
									@can('index-vacancy') 
				          <li><a href="{{ route('job', app()->getLocale()) }}">@lang('header.jobs')</a></li>
									@endcan
									@can('index-candidate') 
                          <li><a href="{{ route('freelancer', app()->getLocale()) }}">@lang('header.freelancers')</a></li>
													@endcan



                           @if (Auth::guest())
				          <li><a href="{{ route('register', app()->getLocale()) }}">@lang('header.register')</a></li>
				          <li><a href="{{ route('login', app()->getLocale()) }}">@lang('header.login')</a></li>		
                            @else
                                <li><a  href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    @lang('header.logout')
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>

                                @endif

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								@lang('header.job_details')				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home', app()->getLocale())}}">@lang('header.home') </a> </p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					 @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message')}}
                    </div>
                    @endif
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <h1 class="text-center"> {{$procent}}%</h1>
                <br>
					<div class="row justify-content-center d-flex">
						<div class="col-lg-6 post-list">
								<div class="single-post d-flex flex-row">
										
										<div class="details col-lg-5">
											<div class="title d-flex flex-row justify-content-between">
												<div class="titles">
													<h3>@lang('header.candidate')</h3>
													<p>---------------------</p>
													<a href="#"><h4>{{$cand->name}}</h4></a>
													<h6>{{$cand->slug}}</h6>					
												</div>
												
											</div>
											
											<h5>@lang('header.employment_type'): {{$cand->emplyment_type}}</h5>
											<h5>@lang('header.contact'): {{$cand->contact}}</h5>
											<p class="address"><span class="lnr lnr-database"></span> {{$cand->price}}</p>
										</div>

										<div class="thumb">
											@lang('header.skills')
											<ul class="tags">
													<li>
														<a href="#">
															{{$cand->skill}}
														</a>
													</li> 
													
												</ul>
												@lang('header.profession')
												<ul class="tags">
													<li>
														<a href="#">
															{{$cand->profession}}
														</a>
													</li> 
													
												</ul>
										</div>
								</div>		
								
							<div class="single-post job-details">
								<h4 class="single-title">@lang('header.description')</h4>	<p>{!!$cand->description!!}</p>
							</div>
							</div>
								<div class="col-lg-6 post-list">

							<div class="single-post d-flex flex-row">
								
								<div class="details col-lg-5">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<h3>@lang('header.job')</h3>
											<p>---------------------</p>
											<a href="#"><h4>{{$vacancy->title}}</h4></a>
											<h6>{{$vacancy->slug}}</h6>					
										</div>
										
									</div>
									
									<h5>@lang('header.employment_type'): {{$vacancy->employment_type}}</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$vacancy->name}}</p>
									<p class="address"><span class="lnr lnr-map"></span> {{$vacancy->contact}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$vacancy->price}}</p>
								</div>	
								<div class="thumb">
									@lang('header.skills')
									<ul class="tags">
											<li>
												<a href="#">
													{{$vacancy->skill}}
												</a>
											</li> 
											
										</ul>
										@lang('header.profession')
										<ul class="tags">
											<li>
												<a href="#">
													{{$vacancy->profession}}
												</a>
											</li>
											
										</ul>
								</div></div>

							<div class="single-post job-details">
								<h4 class="single-title">@lang('header.description')</h4>
								<p>
								{!!$vacancy->description!!}</p>
								
							</div>
							


					
						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			
		@include('platform.footer')
            
@endsection