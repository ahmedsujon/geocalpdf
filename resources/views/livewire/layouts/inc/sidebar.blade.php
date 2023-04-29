<div>
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="position-relative mx-auto">
                @if(Auth::user()->avatar)
                <img src="{{ asset('uploads/profile') }}/{{ Auth::user()->avatar }}" alt="user"
                    class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                @else
                <img src="{{ asset('assets/images/defaults/default.png') }}" alt="user" class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                @endif
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold">{{ Auth::user()->name }} </h5>
                <p class="opacity-50 mb-0">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="ti ti-brand-codepen
                            menu-icon"></i><span>Overview</span></a>
                    </li>
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('templates') }}"><i class="ti ti-brand-codepen
                                menu-icon"></i><span>Templates</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarMOISTURE" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarMOISTURE">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Field Moisture</span>
                            </a>
                            <div class="collapse {{ request()->is('commercial') || request()->is('commercial/*')? 'show': '' }}"
                                id="sidebarMOISTURE">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.commercial') }}">All Files</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarPROPERTIES" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPROPERTIES">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Physical Properties</span>
                            </a>
                            <div class="collapse {{ request()->is('templateOne') || request()->is('templateOne/*')? 'show': '' }}"
                                id="sidebarPROPERTIES">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="3">All Files</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id ==
                        '3')
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>anagements</span></li>
                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id ==
                        '3')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Project</span>
                            </a>
                            <div class="collapse {{ request()->is('project') || request()->is('project/*')? 'show': '' }}"
                                id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('project.list') }}">Project Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('project.create') }}" class="nav-link ">Add Project</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarClient" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarClient">
                                <i class="ti ti-users menu-icon"></i>
                                <span>Clients</span>
                            </a>
                            <div class="collapse {{ request()->is('client') || request()->is('client/*')? 'show': '' }}"
                                id="sidebarClient">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('client.list') }}">Client Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('client.create') }}">Add Client</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarProctor" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarProctor">
                                <i class="ti ti-users menu-icon"></i>
                                <span>Proctor</span>
                            </a>
                            <div class="collapse {{ request()->is('client') || request()->is('client/*')? 'show': '' }}"
                                id="sidebarProctor">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('proctor.list') }}">Proctor Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('proctor.create') }}">Add Proctor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '2')
                        <!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarUser" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarUser">
                                <i class="ti ti-user-check menu-icon"></i>
                                <span>Users</span>
                            </a>
                            <div class="collapse {{ request()->is('user') || request()->is('user/*')? 'show': '' }}"
                                id="sidebarUser">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.list') }}">User Listing</a>
                                    </li>
                                    <!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.create') }}">Add User</a>
                                    </li>
                                    <!--end nav-item-->
                                </ul>
                                <!--end nav-->
                            </div>
                            <!--end sidebarEmail-->
                        </li>
                        <!--end nav-item-->
                        @endif
                        @endif
                       
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">S<span>ettings</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}"><i
                                    class="ti ti-settings menu-icon"></i><span>Settings</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="ti ti-logout menu-icon"></i><span>Logout</span></a>
                            <form id="logout-form" style="display: none;" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!--end sidebarCollapse-->
            </div>
        </div>
    </div>
</div>