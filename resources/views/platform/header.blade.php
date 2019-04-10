
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ route('website', app()->getLocale()) }}">@lang('header.home')</a></li>
				          <li><a href="{{ route('about', app()->getLocale()) }}">@lang('header.about')</a></li>
				          <li><a href="{{ route('contact', app()->getLocale()) }}">@lang('header.contact')</a></li>



                           @if (Auth::guest())
				          <li><a class="ticker-btn" href="{{ route('register', app()->getLocale()) }}">@lang('header.register')</a></li>
				          <li><a class="ticker-btn" href="{{ route('login', app()->getLocale()) }}">@lang('header.login')</a></li>		
                            @else
														<li><a  href="{{ route('home', app()->getLocale()) }}">
                                   @lang('header.home') 
                                </a>
                                
                               </li>
                                <li><a  class="ticker-btn" href="{{ route('logout', app()->getLocale()) }}"
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


