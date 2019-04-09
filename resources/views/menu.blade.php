
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
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
								<li><a  href="{{ route('website', app()->getLocale()) }}">
                                    Website
                                </a>
				          <li class="menu-active"><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
									@can('create-vacancy') 
									<li class="menu-active"><a href="{{ route('registration_job', app()->getLocale()) }}">Post a job</a></li>
									@endcan
									@can('index-vacancy') 
				          <li><a href="{{ route('job', app()->getLocale()) }}">jobs</a></li>
									@endcan
									@can('index-candidate') 
                          <li><a href="{{ route('freelancer', app()->getLocale()) }}">Freelancers</a></li>
													@endcan



                           @if (Auth::guest())
				          <li><a class="ticker-btn" href="{{ route('register', app()->getLocale()) }}">Signup</a></li>
				          <li><a class="ticker-btn" href="{{ route('login', app()->getLocale()) }}">Login</a></li>		
                            @else
                                <li><a  class="ticker-btn" href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
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