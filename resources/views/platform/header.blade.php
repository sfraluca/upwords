<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Upwords</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('home') }}">How it work <span class="sr-only">(current)</span></a>
                    </li>
                    <li >
                        <a href="#">Support</a>
                    </li>
                    <li >
                        <a href="#">Find job</a>
                    </li>
                    <li >
                        <a href="#">Post job</a>
                    </li>
                </ul>

             <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
    
                @if (Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                    <li><a href="{{route('list_drafts')}}">Drafts</a></li>
                    <li><a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>

                    </ul>
                </li>
                </ul>

                @endif
        </div>
    </nav>