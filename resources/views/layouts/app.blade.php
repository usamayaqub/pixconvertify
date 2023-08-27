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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pixconvertify') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('./img/fav.png')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('convertify-style/variables.css')}}">
    <link rel="stylesheet" href="{{asset('convertify-style/main-style.css')}}"> 

</head>
<body>

            @yield('content')



</body>


</html>