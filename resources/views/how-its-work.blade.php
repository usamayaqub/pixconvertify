@extends('layouts.master')

@section('meta_title', 'Learn How PixConvertify Works - Image Conversion & Compression Guide')
@section('meta_description', 'Explore PixConvertify image conversion and compression process in detail. Discover how we transform and compress your images effortlessly while preserving quality. Step-by-step guide to efficient image optimization')
@section('canonical',"https://pixconvertify.com/how-its-work")

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
                <img src="{{asset('./assets/images/hiw-image.svg')}}" class="banner_img" alt="">
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
      <div class="flex-wrap mt-5">
        <div class="flex-50">
          <div>
            <span class="kicker">Step 1</span> 
            <h3>Upload Your File</h3>
            <p>
            The journey begins with a seamless file upload process. Click on the "Upload" button, and you'll be presented with a window to select your image file from your computer, phone, or cloud storage. Our platform supports various image formats like JPG, PNG, GIF, BMP, and more.
            </p>
          </div>
        </div>
        <div class="flex-50">
            <div class="img-wrap">
                <img src="{{asset('./assets/images/Capture1.png')}}" alt="">
            </div>
        </div>
      </div>
      <div class="flex-wrap col-reserve-md">
        <div class="flex-50">
            <div class="img-wrap">
                <img src="{{asset('./assets/images/Capture2.PNG')}}" alt="">
            </div>
        </div>
        <div class="flex-50">
          <div>
            <span class="kicker">Step 2</span>
            <h3>Select Output Format</h3>
            <p>
              Once your image is uploaded, it's time to choose the output format. We offer an extensive range of format options to suit your specific needs. Whether you want to convert your image to JPG for high-quality photographs, PNG for transparent images, or any other format, simply select the desired option from the drop-down menu.
            </p>
          </div>
        </div>
      </div>
      <div class="flex-wrap">
        <div class="flex-50">
          <div>
            <span class="kicker">Step 3</span> 
            <h3>Download Your Converted Image</h3>
            <p>
              Congratulations! Your image has been successfully converted. Now, click the "Download" button to save the converted image to your device or preferred location. Feel free to share the newly converted image with your friends, colleagues, or use it for your personal or professional projects.
            </p>
          </div>
        </div>
        <div class="flex-50">
            <div class="img-wrap">
                <img src="{{asset('./assets/images/Captured3.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection