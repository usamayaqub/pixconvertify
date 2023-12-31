<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.google.com/recaptcha/api.js"></script>
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
    <link rel="shortcut icon" type="image/png" href="{{asset('./assets/images/fav.png')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/variables.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/responsivness.css')}}">

      <!-- Include toastr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/node-snackbar@latest/src/js/snackbar.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
    <title>{{ config('app.name', 'Pixconvertify') }}</title>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "PixConvertify",
            "url": "https://pixconvertify.com/",
            "logo": "https://pixconvertify.com/assets/images/site-logo.svg",
            "description": "PixConvertify is an online image conversion service. We specialize in converting PNG to WEBP, JPG to DOCX, JPG to WEBP, DOCX to PDF, PNG to PDF, PNG to GIF, JPEG to GIF, JPG to GIF, WEBP to GIF, GIF to PDF, WEBP to PNG, WEBP to JPG, WEBP to JPEG, WEBP to PDF, GIF to WEBP.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "63-B New Shalimar Town Gulshan Ravi",
                "addressLocality": "Lahore",
                "addressCountry": "Pakistan"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "info@pixconvertify.com",
                "contactType": "customer service"
            },
            "sameAs": [
                "https://www.facebook.com/PixConvertify",
                "https://twitter.com/PixConvertify",
                "https://www.instagram.com/PixConvertify/"
              ]
        }
    </script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>   
    <!-- MATERIZE SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main-js.js')}}"></script>


   
<script>
    $(document).ready(function() {
        // Check if a success or error message is present in the session
        var successMessage = '{{ Session::get("success") }}';
        var errorMessage = '{{ Session::get("error") }}';

        if (successMessage !== '') {
            Snackbar.show({
                pos: 'bottom-center',
                text: successMessage,
                backgroundColor: '#8bd2a4',
                actionTextColor: '#fff'
            });
        }

        if (errorMessage !== '') {
            Snackbar.show({
                pos: 'bottom-center',
                text: errorMessage,
                backgroundColor: '#ba181b',
                actionTextColor: '#fff'
            });
        }
    });
</script>

<script>
    // Make an AJAX request to trigger the cleanup process
    window.addEventListener('DOMContentLoaded', function() {
        fetch("{{ route('run-cleanup') }}", {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    });
</script>
</body>

</html>