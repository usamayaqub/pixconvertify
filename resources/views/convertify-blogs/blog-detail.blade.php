@extends('layouts.master')
@section('meta_title', $blog->meta_title)
@section('meta_description', $blog->meta_description)
@section('canonical',"https://pixconvertify.com/blog/".$blog->slug)

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<!-- BANNER SECTION -->
<section class="site-banner blog-banner">
    <div class="site-banner_container">
        <div class="site-banner-wrap">
          <div class="w-100">
            <h1 class="px-blog-h1">PixConvertify Blog</h1>
            <nav>
              <div class="nav-wrapper">
                <div class="col s12 d-flex bread_crump-wrap-md">
                  <a href="{{route('get-blogs')}}" class="breadcrumb">ALL BLOGS</a>
                  <a href="#!" class="breadcrumb">{{$blog->title}}</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
    </div>
</section>
<div class="container-wrapper">
  <div class="container">
    <div class="px-content">
    @if(isset($blog->images->first()->url))
    <div class="blog_image_wrap">
      <img src="{{$blog->images->first()->url}}" class="obj_fit" alt="">
    </div>
      @endif
      <!-- BLOG DETAILS HERE -->
      <div>
        {!!$blog->content!!}
      </div>
    </div>
  </div>
</div>
@endsection