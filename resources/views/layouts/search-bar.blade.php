<li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
								<form action="{{route('search', app()->getLocale())}}" method="GET" class="search-form">
															
                                <input class="form-control" name="query" id="query" value="{{ request()->input('query')}}"type="text" placeholder="Search..">
								</form>
                               
                            </div>
                        </li>