
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
							
				      </div>	<h4 class="text-white">{{ Auth::user()->name }}</h4>
							
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
														href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
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