<div>
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="#" class="logo">
                <span>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="position-relative mx-auto">
                @if (Auth::user()->avatar)
                    <img src="{{ asset(auth::user()->avatar) }}" alt="user"
                        class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                @else
                    <img src="{{ asset('assets/images/defaults/default.png') }}" alt="user"
                        class="rounded-circle thumb-md">
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
                    @if (Auth::user()->role_id == '1')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.super.admin.dashboard') }}"><i
                                    class="ti ti-brand-codepen
                            menu-icon"></i><span>Overview</span></a>
                        </li>
                    @endif
                    @if (Auth::user()->role_id == '2')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.project.engineer.dashboard') }}"><i
                                    class="ti ti-brand-codepen
                            menu-icon"></i><span>Overview</span></a>
                        </li>
                    @endif
                    @if (Auth::user()->role_id == '3')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.clerk.dashboard') }}"><i
                                    class="ti ti-brand-codepen
                        menu-icon"></i><span>Overview</span></a>
                        </li>
                    @endif
                    @if (Auth::user()->role_id == '4')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.supervisor.dashboard') }}"><i
                                    class="ti ti-brand-codepen
                        menu-icon"></i><span>Overview</span></a>
                        </li>
                    @endif
                    @if (Auth::user()->role_id == '5')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.tech.dashboard') }}"><i
                                    class="ti ti-brand-codepen
                        menu-icon"></i><span>Overview</span></a>
                        </li>
                    @endif
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('templates') }}"><i
                                    class="ti ti-brand-codepen
                                menu-icon"></i><span>Templates</span></a>
                        </li>
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">F<span>orms</span></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarConcreteForm" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarConcreteForm">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Concrete Test Results</span>
                            </a>
                            <div class="collapse {{ request()->is('concrete/test/result') || request()->is('concrete/test/result/*') ? 'show' : '' }}"
                                id="sidebarConcreteForm">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.test.result') }}">Concrete Results Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.test.result.draft') }}">Draft Files</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCompressiveForm" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCompressiveForm">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Compressive Strength</span>
                            </a>
                            <div class="collapse {{ request()->is('compressive/strength') || request()->is('compressive/strength/*') ? 'show' : '' }}"
                                id="sidebarCompressiveForm">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.compressive.strength') }}">Compressive
                                            Strength</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.compressive.strength.draft') }}">Draft Files</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCommercial" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCommercial">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Commercial Form</span>
                            </a>
                            <div class="collapse {{ request()->is('commercial') || request()->is('commercial/*') ? 'show' : '' }}"
                                id="sidebarCommercial">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.commercial') }}">Commercial
                                            Form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCdot" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCdot">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>CDOT Form</span>
                            </a>
                            <div class="collapse {{ request()->is('cdot') || request()->is('cdot/*') ? 'show' : '' }}"
                                id="sidebarCdot">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.cdot') }}">CDOT Form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarSoilAggregate" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarSoilAggregate">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Soil Aggregate</span>
                            </a>
                            <div class="collapse {{ request()->is('soil-aggregate') || request()->is('soil-aggregate/*') ? 'show' : '' }}"
                                id="sidebarSoilAggregate">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.soil.aggregate') }}">Soil
                                            Aggregate Form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarPlasticConcrete" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarPlasticConcrete">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Plastic Concrete</span>
                            </a>
                            <div class="collapse {{ request()->is('plastic-concrete') || request()->is('plastic-concrete/*') ? 'show' : '' }}"
                                id="sidebarPlasticConcrete">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('template.plastic.concrete.list') }}">Physical Properties
                                            Form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarInspection" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarInspection">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Inspection Of Concrete</span>
                            </a>
                            <div class="collapse {{ request()->is('inspection') || request()->is('inspection/*') ? 'show' : '' }}"
                                id="sidebarInspection">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete') }}">Field Data (Set
                                            1)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.two') }}">Field Data
                                            (Set 2)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.three') }}">Field Data
                                            (Set 3)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.four') }}">Field Data
                                            (Set 4)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.five') }}">Field Data
                                            (Set 5)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.six') }}">Field Data
                                            (Set 6)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.seven') }}">Field Data
                                            (Set 7)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.eight') }}">Field Data
                                            (Set 8)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.nine') }}">Field Data
                                            (Set 9)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('template.concrete.ten') }}">Field Data
                                            (Set 10)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('concrete.field.report') }}">Concrete
                                            Field Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>anagements</span></li>

                            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2')
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarUser" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarUser">
                                        <i class="ti ti-user-check menu-icon"></i>
                                        <span>Users</span>
                                    </a>
                                    <div class="collapse {{ request()->is('user') || request()->is('user/*') ? 'show' : '' }}"
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

                            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarClient" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarClient">
                                        <i class="ti ti-users menu-icon"></i>
                                        <span>Clients</span>
                                    </a>
                                    <div class="collapse {{ request()->is('client') || request()->is('client/*') ? 'show' : '' }}"
                                        id="sidebarClient">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('client.list') }}">Client
                                                    Listing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('client.create') }}">Add
                                                    Client</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                        <i class="ti ti-stack menu-icon"></i>
                                        <span>Project</span>
                                    </a>
                                    <div class="collapse {{ request()->is('project') || request()->is('project/*') ? 'show' : '' }}"
                                        id="sidebarAnalytics">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('project.list') }}">Project
                                                    Listing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('project.create') }}" class="nav-link ">Add
                                                    Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarProctor" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarProctor">
                                        <i class="ti ti-users menu-icon"></i>
                                        <span>Proctor Information</span>
                                    </a>
                                    <div class="collapse {{ request()->is('proctor') || request()->is('proctor/*') ? 'show' : '' }}"
                                        id="sidebarProctor">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('proctor.list') }}">Proctor
                                                    Listing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('proctor.create') }}">Add
                                                    Proctor</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarMixInfo" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarMixInfo">
                                        <i class="ti ti-users menu-icon"></i>
                                        <span>Mix Information</span>
                                    </a>
                                    <div class="collapse {{ request()->is('mix-information') || request()->is('mix-information/*') ? 'show' : '' }}"
                                        id="sidebarMixInfo">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('mixInfo.list') }}">Mix
                                                    Information List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('mixInfo.create') }}">Add Mix
                                                    Information</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
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
                            <form id="logout-form" style="display: none;" method="POST"
                                action="{{ route('logout') }}">
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
