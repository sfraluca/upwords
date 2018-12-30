
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ route('website') }}">Home</a></li>
				          <li><a href="{{ route('about') }}">About Us</a></li>
				          <li><a href="{{ route('contact') }}">Contact</a></li>



                           @if (Auth::guest())
				          <li><a class="ticker-btn" href="{{ url('/register') }}">Signup</a></li>
				          <li><a class="ticker-btn" href="{{ url('/login') }}">Login</a></li>		
                            @else
														<li><a  href="{{ url('/home') }}">
                                    Home
                                </a>
                                
                               </li>
                                <li><a  class="ticker-btn" href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
																
                                @endif

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


