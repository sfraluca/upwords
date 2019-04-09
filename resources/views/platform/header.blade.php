
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ route('website', app()->getLocale()) }}">Home</a></li>
				          <li><a href="{{ route('about', app()->getLocale()) }}">About Us</a></li>
				          <li><a href="{{ route('contact', app()->getLocale()) }}">Contact</a></li>



                           @if (Auth::guest())
				          <li><a class="ticker-btn" href="{{ route('register', app()->getLocale()) }}">Signup</a></li>
				          <li><a class="ticker-btn" href="{{ route('login', app()->getLocale()) }}">Login</a></li>		
                            @else
														<li><a  href="{{ route('home', app()->getLocale()) }}">
                                    Home
                                </a>
                                
                               </li>
                                <li><a  class="ticker-btn" href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                
                                <form id="logout-form" action="{{  route('logout', app()->getLocale() )}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
																
                                @endif

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


