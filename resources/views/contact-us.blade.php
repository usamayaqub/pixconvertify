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
                  <h3 class="heading-md">JPG/JPEG</h3>
                    <p class="">
                      This format of image is mostly used. JPEG/JPG uses a lossy compression format for digital images. Its algorithm is designed so that it reduces the file size of images while maintaining a visually acceptable level of quality. 
                      This format is ideal for complex images and also for photographs. This JPEG/JPG has a smaller file size by comparing the size with all other formats. It supports the RGB color space that's why it can represent millions of colors.
                    </p>
                    <ul class="tag-list">
                      <li>
                        <a href="https://pixconvertify.com/jpg-to-docx"> 
                          JPG to DOCX
                        </a>
                      </li>
                      <li>
                        <a href="https://pixconvertify.com/jpg-to-webp">
                          JPG to WEBP
                        </a>
                      </li>
                      <li>
                        <a href="https://pixconvertify.com/jpg-to-gif">JPG to GIF</a>
                      </li>
                      <li>
                        <a href="https://pixconvertify.com/jpeg-to-gif">JPEG to GIF</a>
                      </li>
                    </ul>
                </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">WEBP</h3>
                <p class="">
                  WEBP is a modern image format which is developed by Google in 2010. WEBP was developed to provide a more efficient way to store images on the internet. 
                  WEBP provides superior compression and quality characteristics as compared to other traditional formats like JPEG, PNG, and GIF. WEBP provides both lossy and lossless compression techniques.
                </p>
                <ul class="tag-list">
                    <li>
                      <a href="https://pixconvertify.com/webp-to-gif"> 
                        WEBP To GIF
                      </a>
                    </li>
                    <li>
                      <a href="https://pixconvertify.com/webp-to-png">
                        WEBO To PNG
                      </a>
                    </li>
                    <li>
                      <a href="https://pixconvertify.com/webp-to-jpg">Webp To JPG</a>
                    </li>
                    <li>
                      <a href="https://pixconvertify.com/webp-to-jpeg">Webp To JPEG</a>
                    </li>
                    <li>
                      <a href="https://pixconvertify.com/webp-to-pdf">Webp To Pdf</a>
                    </li>
                </ul>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">GIF</h3>
                <p class="">
                 GIF stands for “ Graphics Interchange Format”. GIF format is a widely used bitmap image format which is developed by CompuServe. Initially, GIFs were primarily used for simple graphics and images. But later on, GIFs became famous for their short animations and looping sequences. 
                  GIFs support a maximum of 256 colors from a palette of 24-bit RGB colors. This limited color range makes GIFs less suitable for higher-resolution images. GIFs are famous due to their capability to store multiple frames within a single frame. It allows to creation of simple animations. 
                </p>
                <ul class="tag-list">
                    <li>
                      <a href="https://pixconvertify.com/gif-to-pdf"> 
                        GIF To PDF 
                      </a>
                    </li>
                    <li>
                      <a href="https://pixconvertify.com/gif-to-webp">
                        GIF To WEBP
                      </a>
                    </li>
                </ul>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">PNG</h3>
                <p class="">
                  PNG uses a lossless compression method, without sacrificing the quality of the image it preserves all image data.
                  PNG supports various color depths which include 24-bit RGB color and 8-bit indexed color that allow up to 256 colors. PNG is suitable for sharp transitions, graphics, text, or for those images which require transparent backgrounds. PNG also supports alpha channel transparency that allows each part of the image to be fully transparent.
                </p>
                <ul class="tag-list">
                  {{-- <li>
                    <a href="">
                      PNG to JPEG
                    </a>
                  </li> --}}
                  <li>
                    <a href="https://pixconvertify.com/png-to-pdf"> 
                      PNG to PDF
                    </a>
                  </li>
                  {{-- <li>
                    <a href="">
                      PNG to DOCX
                    </a>
                  </li> --}}
                  <li>
                    <a href="https://pixconvertify.com/png-to-webp">
                      PNG to WEBP
                    </a>
                  </li>
                  <li>
                    <a href="https://pixconvertify.com/png-to-gif">PNG to GIF</a>
                  </li>
                </ul>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">PDF</h3>
                <p class="">
                  PDF stands for Portable Document Format and this file format is used to present and exchange the documents reliably. PDF format is developed by Adobe. PDF files can contain text, images, hyperlinks, interactive buttons, forms, videos, and many other important elements. 
                  PDF prevents the original formatting and layout of the file. PDF file is platform-independent. It contains a fixed layout. PDF files can be password protected, prevented from any unauthorized access, and edited. 
                </p>
              </div>
              </div>
          </div>
          <div class="flex-50 bg-f4">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">DOCX</h3>
                <p class="">
                  DOCX is a famous file format developed by Microsoft. DOCX is the default format for the documents created by Microsoft Word. 
                  DOCX is based on XML which is a file format for documents that is readable for both machines as well as humans. DOCX supports a wide array of formatting options which includes fonts, styles, headings, tables, images, hyperlinks, bullet points, and other elements. 
                </p>
                <ul class="tag-list">
                    <li>
                      <a href="https://pixconvertify.com/docx-to-pdf"> 
                        DOCX To PDF 
                      </a>
                    </li>
                </ul>
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