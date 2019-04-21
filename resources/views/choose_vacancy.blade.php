

@extends('platform.platform')

@section('content')


<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
							
				      </div>	<h4 class="text-white">{{ Auth::user()->name }}</h4>
							
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
										@include('layouts.search-bar')
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
														href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),  [app()->getLocale(),  $candidate_id]) }}"
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
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								@lang('header.choose_job')				
							</h1>	
							
							<p class="text-white"> @lang('header.choose_job_prez')	</p>
						
														
					</div>		</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<section class="post-area section-gap">
				<div class="container">

					<div class="row justify-content-center d-flex">
			  <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>@lang('header.title')</th>
                                                <th>@lang('header.slug')</th> 
                                                <th>@lang('header.compare')</th>       
                                             </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>{{$job->title}}</td>
                                                <td>{{$job->slug}}</td>
                                              
                                                <td>
                                                   	<form action ="{{ route('compare_vacancy', [app()->getLocale(), $job->id, $candidate_id])}}">
													<input type="hidden"/>
													<button type="submit" class="btn btn-success btn-icon-text text-right btn-sm">@lang('header.compare')</button>
												</form>
                                                </td>
                                              
                                            </tr>
                                           @endforeach
                                        </tbody>
                                  
                                    </table>
                          
                                       
				
						
						

					</div>
				</div>	
			</section>
			<!-- End post Area -->

		
            
		@include('platform.footer')
            
            @endsection
		