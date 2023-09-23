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
                        Welcome to PixConvertify
                        <span>Your Image Conversion Solution</span>
                    </h1>
                    <p class="banner-message">
                        Welcome to our platform! We're thrilled to connect with you and have meaningful conversations.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section-convertion-and-format bg-white contact_content mt-0">
        <div class="container">
          <div class="flex-wrap">
            <div class="flex-50 bg-white">
              <div>
                <h3 class="h1 mb-5">Get in Touch</h3>
                <p class="">
                  Have a question about our image conversion services? Want to report a bug or provide feedback? Need assistance with our online responsiveness testing tool? We're here to help!

                  Please don't hesitate to reach out using the contact information provided above. We aim to respond promptly to all inquiries and provide you with the support you need.
                  Thank you for choosing PixConvertify as your go-to image converter and responsiveness testing solution. We look forward to hearing from you and assisting you on your digital journey.
                </p>
              </div>
            </div>
            <div class="flex-50">
              <div class="contact-us-form mt-2">
                <h2>Send us a <span>message</span></h2>
                <form class="col s12" action="{{route('contact.send')}}" method="POST" id="contact-form"> 
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
                  <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                  <div class="recaptcha-error" style="color: red;"></div>
                  </div>
                  <div class="row">
                    <button id="submit-button" class="theme-btn site_signin waves-effect waves-light g-recaptcha" type="submit">Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section-convertion-and-format mb-0">
      <div class="container">
        <h3 class="h1 mb-5 center">Services Provided By Pixconvertify</h3>
        <div class="flex-wrap">
          <div class="flex-50 bg-f4">
              <div class="flex-inner">              
                <div>
                  <h3 class="heading-md">PNG Conversion by PixConvertify</h3>
                    <p class="">
                      Enhance your images with PixConvertify's PNG conversion service. We transform your pictures into high-quality PNG files, perfect for web use. No technical expertise required—just upload and convert. Say hello to clear, crisp images on your website and projects. Ready to upgrade? PixConvertify has you covered!
                    </p>
                </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">Convert WebP into JPG with PixConvertify</h3>
                <p class="">
                  Transform your WebP images into high-quality JPG files effortlessly with PixConvertify. Our user-friendly service makes the process a breeze. Say goodbye to compatibility issues and hello to versatile JPG images for your website and projects. Try it today and experience the seamless WebP to JPG conversion with PixConvertify.
                </p>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">Effortless PDF Conversion with PixConvertify</h3>
                <p class="">
                  Experience seamless PDF conversion with PixConvertify. Our service simplifies the process, allowing you to transform your files with ease. Convert various formats into PDF effortlessly, ensuring compatibility and professional presentation. Take advantage of PixConvertify's PDF conversion today for all your document needs.
                </p>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">Streamlined JPG Conversion with PixConvertify</h3>
                <p class="">
                  At PixConvertify, we make JPG conversion a breeze. Whether you need to convert images from other formats or optimize your existing JPGs, our user-friendly service has you covered. Enjoy top-notch image quality and versatility for your website and projects. Trust PixConvertify for all your JPG conversion needs.
                </p>
              </div>
              </div>
          </div>
          <div class="flex-100 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">Online Responsiveness Testing</h3>
                <p class="">
                  We understand the importance of a responsive website. That's why we've built a powerful tool that allows you to test the responsiveness of your site with ease. Simply visit our 
                  <a href="{{route('get-checkrespo')}}">Responsive Testing Tool</a> to check how your website looks and behaves across various devices and screen sizes.
                </p>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var recaptcha = document.querySelector(".g-recaptcha");

        var submitButton = document.querySelector("#submit-button");

        submitButton.addEventListener("click", function (event) {
            event.preventDefault(); 

            // Check if reCAPTCHA is checked
            if (grecaptcha.getResponse().length === 0) {
                // If reCAPTCHA is not checked, display an error message
                var recaptchaError = document.querySelector(".recaptcha-error");
                recaptchaError.textContent = "Please complete the reCAPTCHA.";
            } else {
                // If reCAPTCHA is checked, submit the form
                document.querySelector("#contact-form").submit();
            }
        });
    });
</script>
@endsection