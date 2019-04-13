
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          	@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
														href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
														@if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
										</li>
								@endforeach
				          <li><a href="{{ route('about', app()->getLocale()) }}">@lang('header.about')</a></li>
				          <li><a href="{{ route('contact', app()->getLocale()) }}">@lang('header.contact')</a></li>

							

                           @if (Auth::guest())
				          <li><a  href="{{ route('register', app()->getLocale()) }}">@lang('header.register')</a></li>
				          <li><a  href="{{ route('login', app()->getLocale()) }}">@lang('header.login')</a></li>		
                            @else
														<li><a  href="{{ route('home', app()->getLocale()) }}">
                                   @lang('header.home') 
                                </a>
                                
                               </li>
                                <li><a  href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   @lang('header.logout') </a>
                                
                                <form id="logout-form" action="{{  route('logout', app()->getLocale() )}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
																
                                @endif

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


