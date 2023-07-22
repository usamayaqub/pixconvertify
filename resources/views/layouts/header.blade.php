<!-- Header -->
<header class="site-header" id="site-header">
    <nav>
        <div class="site-header_inner-wrap">
            <div class="site-header_link-wrap">
                <a href="{{route('base')}}" class="site_logo">
                    <img src="./assets/images/site-logo.svg" alt="">
                </a>
                <ul class="site-header-links">
                    <li>
                        <a href="{{route('get-justcompress')}}">Compress files</a>
                    </li>
                    <li>
                        <a href="{{route('get-checkrespo')}}">Check Responsiveness</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>
            </div>
            <ul class="site-header-signup">
                <li><a class="theme-btn site_login" href="#">Login</a></li>
                <li><a class="theme-btn site_signin waves-effect waves-light" href="#">Sign Up</a></li>
                <img class="site-menu" src="./assets/images/toggle.svg" alt="toggle menu">
            </ul>
        </div>
    </nav>
</header>

<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar_logo">
        <img src="./assets/images/Pixconvertify.svg" alt="">
    </div>
    <div class="sidebar_menu">
        <ul>
            <li><a href="{{route('get-justcompress')}}">Compress files</a></li>
            <li><a href="{{route('get-checkrespo')}}">Check Responsiveness</a></li>
            <li><a href="#">Support</a></li>
        </ul>
        <li class="logout">
            <a href="#">
                <img src="./assets/images/sign_out.svg" alt="">
                <span>Logout</span>
            </a>
        </li>
    </div>
</aside>
<div class="sidebar_overlay"></div>