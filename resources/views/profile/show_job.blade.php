@extends('platform.platform')

@section('content')
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
				      </div><h4 class="text-white">{{ Auth::user()->name }}</h4>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">		@include('layouts.search-bar')
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
											href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName() , [app()->getLocale(), $data->id]) }}"
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

<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								@lang('header.your_job')				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home', app()->getLocale())}}">@lang('header.home') </a>  <span class="lnr lnr-arrow-right"></span> 
							 <a href="{{route('freelancer', app()->getLocale())}}"> @lang('header.go_to_f')</a></p>
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
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul>
                           
                            @can('delete-vacancy') 
								<li><form method="POST" class="delete_form" action ="{{ route('delete_vacancy', [app()->getLocale(), $data->id])}}">
                               
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE"/>
									<button type="submit" style="float: right;" class="genric-btn danger ">@lang('header.delete')</button>
								</form></li> @endcan
                                 @can('update-vacancy') 
							<li><a class="genric-btn primary" style="float: right;" href="{{route('edit_vacancy', [app()->getLocale(), $data->id])}}">@lang('header.edit')</a></li>
                            @endcan
							</ul>
<br><br><br>

                            <div class="col-lg-13 post-list">

                            <div class="single-post d-flex flex-row">
                                <div class="thumb">
                                   @lang('header.skills') 
                                    <ul class="tags">
                                            <li>
                                                <a href="#">
                                                    {{$data->skill}}
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        @lang('header.profession')
                                        <ul class="tags">
                                            <li>
                                                <a href="#">
                                                    {{$data->profession}}
                                                </a>
                                            </li> 
                                            
                                        </ul>
                                </div>
                                <div class="details">
                                    <div class="title d-flex flex-row justify-content-between">
                                        <div class="titles">
                                            <h4>{{$data->title}}</h4>
                                            <h6>{{$data->slug}}</h6>					
                                        </div>
                                       
                                    </div>
                                    <p>
                                        _____________________________________________________________
                                    </p>
                                    <h5>@lang('header.employment_type'): {{$data->employment_type}}</h5>
                                    <p class="address"><span class="lnr lnr-map"></span>@lang('header.name'): {{$data->name}}</p>
                                    <p class="address"><span class="lnr lnr-map"></span>@lang('header.contact'): {{$data->contact}}</p>
                                    <p class="address"><span class="lnr lnr-database"></span>@lang('header.price'): {{$data->price}}</p></div>
                            </div>	
                            <div class="single-post job-details">
                                <h4 class="single-title">@lang('header.description')</h4>
                                <p>
                                {!!$data->description!!}</p>
                                
                                </div>				

					</div>
				</div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection