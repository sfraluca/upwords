<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Types of users
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-user-circle"></i>Admin staff <span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Users</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_users')}}">List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_user')}}">Add</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-divider">
                                Candidates&Vacancy
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Jobs</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_jobs')}}">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_job')}}">Add</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Candidates</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_candidates')}}">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_candidate')}}">Add</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Profession&Skill
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-chart-pie"></i>Profession</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_professions')}}">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_profession')}}">Add</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fab fa-fw fa-wpforms"></i>Skill</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_skills')}}">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_skill')}}">Add</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        