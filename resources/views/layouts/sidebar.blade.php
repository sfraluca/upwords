<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">@lang('header.dashboard')</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                @lang('header.user_type')
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{route('admin.dashboard', app()->getLocale())}}"><i class="fa fa-fw fa-user-circle"></i>@lang('header.admin_staff') <span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>@lang('header.users')</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_users', app()->getLocale())}}">@lang('header.list') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_user', app()->getLocale())}}">@lang('header.add')</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-divider">
                                @lang('header.cand_vacant')
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>@lang('header.jobs')</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_jobs', app()->getLocale())}}">@lang('header.list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_job', app()->getLocale())}}">@lang('header.add')</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>@lang('header.candidates')</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_candidates', app()->getLocale())}}">@lang('header.list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_candidate', app()->getLocale())}}">@lang('header.add')</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                               @lang('header.profess_skill') 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-chart-pie"></i>@lang('header.profession')</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_professions', app()->getLocale())}}">@lang('header.list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_profession', app()->getLocale())}}">@lang('header.add')</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fab fa-fw fa-wpforms"></i>@lang('header.skills')</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('list_all_skills', app()->getLocale())}}">@lang('header.list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('create_skill', app()->getLocale())}}">@lang('header.add')</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        