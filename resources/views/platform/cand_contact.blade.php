@extends('platform.platform')

@section('content')

<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
				      </div><h4 class="text-white">{{ Auth::user()->name }}</h4>
					  
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">					
										@include('layouts.search-bar')
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
														href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [app()->getLocale(),$candidates->id ]) }}"
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
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							{{ Auth::user()->name }}
							<h1 class="text-white">
								@lang('header.contact_freelancer')		
							</h1>	
							<p class="text-white"><a href="{{route('website', app()->getLocale())}}">@lang('header.home') </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('contact',app()->getLocale())}}">@lang('header.contact_admin')</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12">
							<form class="form-area "action="{{route('store_contact_candidate',[app()->getLocale(),$candidates->id ])}}" method="post" class="contact-form text-right">
								{{ csrf_field()}}
								<div class="row">	
									<div class="col-lg-12 form-group">
										<input name="name" placeholder="Enter your name" 
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" 
										class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" 
										pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
										class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter your subject" 
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" 
										class="common-input mb-20 form-control" required="" type="text">
										<textarea class="common-textarea mt-10 form-control" name="message" 
										placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" 
										required=""></textarea>
										<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">@lang('header.send_message')</button>
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
			
	
		
		
		@include('platform.footer')
            
@endsection