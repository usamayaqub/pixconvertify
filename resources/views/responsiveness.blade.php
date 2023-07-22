@extends('layouts.master')

@section('meta_title', 'Check Responsiveness')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')

<section class="site-banner p-0 banner-height">
  <div class="site-banner_container">
      <div class="site-banner_wrapper">
         <div class="site-banner-left">
            <div class="banner-badge">
              <p>Check your website Responsiveness</p>
            </div>
          <h1>Responsiveness
            <span>Checker</span>        
          </h1>
          <p class="banner-message">
            Check you site Responsiveness in all devices at one time
          </p>
          <div class="shape">
            <img src="./assets/images/shape.svg" class="obj_fit_contain" alt="">
          </div>
<div class="search_wrap">
  <input id="site-url-input-field" type="url" class="form-control" placeholder="https://pixconvertify.com" required>
  <button id="submit-btn" class="theme-btn waves-effect waves-light">Check Now</button>
</div>

      </div>
    </div>
  </div>
</section>


  <div class="responsiveness_container-wrap" id="next">
      <div class="responsiveness_wrap">
        <div class="wrapper">
          <section class="display">
            <div class="mobile">
              <div class="trim">
                <iframe id="iframe_mobile_screen" src=""></iframe>
              </div>
            </div>
            <div class="tablet">
              <iframe id="iframe_tablet_screen" src=""></iframe>
            </div>
            <div class="laptop">
              <iframe id="iframe_laptop_screen" src=""></iframe>
            </div>
            <div class="desktop">
              <iframe id="iframe_large_screen" src=""></iframe>
            </div>
          </section>
        </div>
      </div>
  </div>

@endsection