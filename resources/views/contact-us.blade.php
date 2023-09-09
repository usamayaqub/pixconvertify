@extends('layouts.master')

@section('meta_title', "Contact PixConvertify | Get in Touch for Image Conversion Support")
@section('meta_description', "Have questions or need assistance with image conversion? Contact PixConvertify today! Our friendly support team is here to help you with any queries or concerns you may have. Reach out to us through our contact form or email, and we'll ensure a prompt and helpful response. Let us enhance your image conversion experience at PixConvertify")
@section('canonical',"https://pixconvertify.com/contact-us")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')

<!-- BANNER SECTION -->
    <section class="site-banner contact-wrapper">
        <div class="site-banner_container">
            <div class="site-banner-wrap">
                <div class="site-banner-left">
                    <div class="banner-badge">
                        <p>Contact Us</p>
                    </div>
                    <h1>
                        Lets Chat.
                        <span>Get in Touch with us</span>
                    </h1>
                    <p class="banner-message">
                        Welcome to our platform! We're thrilled to connect with you and have meaningful conversations.
                    </p>
                    <div class="shape">
                        <img src="{{asset('assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                    </div>
                </div>
                <div class="site-banner-right">
                  <div class="contact-us-form">
                    <h2>Send us a <span>message</span></h2>
                    <form class="col s12" action="{{route('contact.send')}}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="full_name" value="" type="text" class="validate" name="name">
                          @error('name')
                                <span class="error">{{ $message }}</span>
                                @enderror
                          <label for="full_name">Full Name</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="email" type="email" value="" class="validate" name="email">
                          @error('email')
                                <span class="error">{{ $message }}</span>
                                @enderror
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input value="" id="subject" type="text" class="validate" name="title">
                          @error('title')
                            <span class="error">{{ $message }}</span>
                                @enderror
                          <label for="subject">Subject</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea" name="message"></textarea>
                          @error('message')
                                <span class="error">{{ $message }}</span>
                                @enderror
                          <label for="message">Message</label>
                        </div>
                      </div>
                    <div class="row">
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    </div>
                      <div class="row">
                        <button type="submit" class="theme-btn site_signin waves-effect waves-light">Send Message</button>
                      </div>
                    </form>
                  </div>
                  <div class="blur">
                      <img src="{{asset('assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection