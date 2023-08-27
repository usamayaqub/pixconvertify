<body data-sidebar="dark" class="" style="">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box pt-2">
                        <div class="logo logo-dark">
                            <span class="logo-sm">
                                <p class='small_logo_e'>P</p>
                            </span>
                            <span class="logo-lg">
                                <img src="{{ URL::asset('assets/images/Pixconvertify-2.svg') }}" style="height:50px;margin:auto;padding-top:10px;" />
                            </span>
                        </div>
                        <div class='logo logo-light'>
                            <span class="logo-sm">
                                <p class='small_logo_e'>P.</p>
                            </span>
                            <span class="logo-lg">
                                <img src="{{ URL::asset('assets/images/Pixconvertify-2.svg') }}" style="height:50px;margin:auto;padding-top:10px;" />
                            </span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- App Search-->
                </div>
                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('assets/images/user-circle.svg') }}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ ucfirst(Auth::user()->name) }}</span>
                            <i class="fa-solid fa-arrow-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                            <a href="{{ route('index.dailyquota') }}" class="dropdown-item"><i
                                    class="bx bx-cog font-size-16 align-middle me-1"></i> <span
                                    key="t-my-wallet">Settings</span></a>
                            <a class="dropdown-item text-danger" href="javascript:void();"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar="init" class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper"
                                style="height: 100%; padding-right: 0px; padding-bottom: 0px; overflow: hidden;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!--- Sidemenu -->
                                    <div id="sidebar-menu" class="mm-active">
                                        <!-- Left Menu Start -->
                                        <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                            <li class="menu-title" key="t-menu">Menu</li>
                                            
                                            <li class="mm-active">
                                                <a class="waves-effect"
                                                    href="{{ route('home') }}" id="topnav-dashboard" role="button">
                                                    <img src="{{asset('assets/images/write.svg')}}" alt="">
                                                    <span key="t-dashboards">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="mm-active">
                                                <a class="waves-effect"
                                                    href="{{ route('blogs.index') }}" id="topnav-dashboard"
                                                    role="button">
                                                    <img src="{{asset('assets/images/write.svg')}}" alt="">
                                                    <span key="t-dashboards">Blogs</span>
                                                </a>
                                            </li>

                                            <li class="mm-active">
                                                <a class="waves-effect"
                                                    href="{{ route('contact.index') }}" id="topnav-dashboard"
                                                    role="button">
                                                    <img src="{{asset('assets/images/write.svg')}}" alt="">
                                                    <span key="t-dashboards">Contact Us</span>
                                                </a>
                                            </li>

                                    <li>
                                    <a class="waves-effect" href="javascript:void();"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{asset('assets/images/write.svg')}}" alt="">
                                    <span
                                    key="t-logout">Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    </form>
                                    </li>
                                        </ul>
                                    </div>
                                    <!-- Sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 126px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                    </div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar"
                        style="height: 572px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                </div>
            </div>
        </div>
         <!-- End Page-content -->
         @include('admin.layouts.footer')
    </div>
    <!-- END layout-wrapper -->
</body>
