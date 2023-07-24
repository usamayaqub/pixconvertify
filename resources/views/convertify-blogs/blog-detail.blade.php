@extends('layouts.master')

@section('meta_title', 'Blogs | Convertify')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<!-- BANNER SECTION -->
<section class="site-banner blog-banner">
    <div class="site-banner_container">
        <div class="site-banner-wrap">
          <div class="shape">
            <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
          </div>
          <div class="w-100">
            <h1 class="px-blog-h1">PixConvertify Blog</h1>
            <nav>
              <div class="nav-wrapper">
                <div class="col s12 d-flex">
                  <a href="{{route('get-blogs')}}" class="breadcrumb">ALL BLOGS</a>
                  <a href="#!" class="breadcrumb">Second</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
    </div>
</section>
<div class="blog-wrapper">
  <div class="container">
    <div class="px-content">
      <img src="{{asset('assets/images/1.jpg')}}" class="obj_fit" alt="">
      <!-- BLOG DETAILS HERE -->
    </div>
  </div>
</div>
@endsection