<!-- Header -->
<header class="site-header" id="site-header">
    <nav>
        <div class="site-header_inner-wrap">
            <div class="site-header_link-wrap">
                <a href="{{route('base')}}" class="site_logo">
                    <img src="{{asset('assets/images/site-logo.svg')}}" alt="Pixconvertify">
                </a>
                <ul class="site-header-links">
                    <li>
                        <a href="{{route('get-justcompress')}}">Compress files</a>
                    </li>
                    <li>
                        <a href="{{route('get-checkrespo')}}">Check Responsiveness</a>
                    </li>
                    <li class="d-none">
                        <a href="#">Support</a>
                    </li>
                </ul>
            </div>
            <div class="menu-wrap">
                @if (Route::has('login'))
                <div>
                    <ul class="site-header-signup pt-0">
                        @auth
                            <a class='dropdown-trigger user-profile-dropdown' href="{{ url('/home') }}" data-target='dropdown1'>
                                <img src="{{asset('assets/images/user-circle.svg')}}" alt="">
                                {{ucfirst(Str::before(auth()->user()->name, ' ') )}}
                                <img src="{{asset('assets/images/arrow-down.svg')}}" alt="">
                            </a>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{asset('assets/images/sign_out.svg')}}" alt="">
                                    Logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                                <li><a class="theme-btn site_login" href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                <li><a class="theme-btn site_signin waves-effect waves-light" href="{{ route('register') }}">Sign Up</a></li>
                                @endif
                            @endauth
                        </ul>
                    </ul>
                </div>
                @endif
                <img class="site-menu" src="{{asset('assets/images/toggle.svg')}}" alt="toggle menu">
            </div>
            </div>
        </div>
    </nav>
</header>

<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar_logo">
        <img src="./assets/images/site-logo.svg" alt="">
    </div>
    <div class="sidebar_menu">
        <ul>
            <li><a href="{{route('get-justcompress')}}">Compress files</a></li>
            <li><a href="{{route('get-checkrespo')}}">Check Responsiveness</a></li>
            <li><a href="{{route('get-how-works')}}">How its Works</a></li>
            <li><a href="{{route('get-blogs')}}">Blogs</a></li>
            <li><a href="{{route('get-privacy-policies')}}">Privacy Policy</a></li>
            <li><a href="{{route('get-contact')}}">Contact Us</a></li>
            <li><a href="{{route('get-term')}}">Term</a></li>
        </ul>
        @if(Auth::check())
        <li class="logout">
            <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> 
                <span key="t-logout">Logout</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
        </li>
        @else
        <ul class="pt-0">
            @auth
                <a class='dropdown-trigger user-profile-dropdown' href="{{ url('/home') }}" data-target='dropdown1'>
                    <img src="{{asset('assets/images/user-circle.svg')}}" alt="">
                    {{ucfirst(Str::before(auth()->user()->name, ' ') )}}
                    <img src="{{asset('assets/images/arrow-down.svg')}}" alt="">
                </a>
            <ul id='dropdown1' class='dropdown-content'>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{asset('assets/images/sign_out.svg')}}" alt="">
                        Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                    <li class="mb-1"><a class="theme-btn site_login w-100" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a class="theme-btn site_login w-100 bg-theme text-white" href="{{ route('register') }}">Sign Up</a></li>
                    @endif
                @endauth
            </ul>
        </ul>
        @endif
    </div>
</aside>
<div class="sidebar_overlay"></div>