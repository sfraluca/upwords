
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ route('website') }}">Home</a></li>
									@can('create-vacancy') 
									<li class="menu-active"><a href="{{ route('registration_job') }}">Post a job</a></li>
									@endcan
									@can('index-vacancy') 
				          <li><a href="{{ route('job') }}">jobs</a></li>
									@endcan
									@can('index-candidate') 
                          <li><a href="{{ route('freelancer') }}">Freelancers</a></li>
													@endcan
				          <li><a href="{{ route('contact') }}">Contact</a></li>



                           @if (Auth::guest())
				          <li><a class="ticker-btn" href="{{ url('/register') }}">Signup</a></li>
				          <li><a class="ticker-btn" href="{{ url('/login') }}">Login</a></li>		
                            @else
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