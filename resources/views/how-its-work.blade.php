@extends('layouts.master')

@section('meta_title', 'How Its Work | Convertify')
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
            <div class="site-banner-left">
                <div class="banner-badge">
                    <p>PixConvertify</p>
                </div>
                <h1>
                    How Its  
                  <span>Works</span>
                </h1>
                <p class="banner-message">
                    Discover More Insights Dive Deeper into Our Informative Blog Articles
                </p>
                <div class="shape">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
            <div class="site-banner-right">
                <img src="{{asset('./assets/images/blog.svg')}}" class="banner_img" alt="">
                <div class="blur">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-wrapper how_its_work">
  <div class="container">
    <div class="px-content">
      <div class="section-heading">
        <h2 class="center-align">Your Ultimate Picture Converter Guide</h2>
        <p>
          Welcome to our PixConvertify, the ultimate tool that allows you to effortlessly convert your images from one format to another with just a few simple steps. Whether you need to resize, compress, or transform your pictures, our user-friendly platform has got you covered. Below, we've outlined a step-by-step guide on how to use our Picture Converter effectively.
        </p>
      </div>
      <div class="row">
        <div class="col l6">
          <h3>Step 1: Upload Your File</h3>
          <p>
           The journey begins with a seamless file upload process. Click on the "Upload" button, and you'll be presented with a window to select your image file from your computer, phone, or cloud storage. Our platform supports various image formats like JPG, PNG, GIF, BMP, and more.
          </p>
        </div>
        <div class="col l6">
            <div class="img-wrap">
                <img src="{{asset('./assets/images/file.svg')}}" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection