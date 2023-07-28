<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="canonical" href="@yield('canonical')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta itemprop="name" content="@yield('meta_title')">
    <meta itemprop="description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_title')" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Site Title" />
    <meta name="twitter:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta name="twitter:description" content="@yield('meta_description')" />
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="M4FM">
    <link rel="icon" sizes="384x384" href="{{ asset('/img/icons/icon-384x384.png?v=2.6') }}">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="M4FM">
    <link rel="apple-touch-icon" href="{{ asset('/img/icons/apple-touch-icon.png?v=2.6') }}">
    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/img/icons/apple-touch-icon.png?v=2.6') }}">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#17a6b5">
    <link rel="shortcut icon" type="image/png" href="{{asset('./img/fav-icon.png')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/variables.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/responsivness.css')}}">

      <!-- Include toastr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">

    <title>{{ config('app.name', 'Pixconvertify') }}</title>
</head>

<body>
    <div class="drag-and-drop_overlay"></div>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @yield('footer_scripts')
    @stack('scripts')

    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- MATERIZE SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main-js.js')}}"></script>
</body>

</html>