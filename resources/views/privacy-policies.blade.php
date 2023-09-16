@extends('layouts.master')

@section('meta_title', 'PixConvertify Privacy Policies | Image Conversion Website')
@section('meta_description', 'Learn about PixConvertify commitment to your privacy and data protection. Our Privacy Policies outline how we collect, use, and safeguard your personal information while providing top-notch image conversion services. Trust us with your pictures and rest assured that your data is handled responsibly and securely.')
@section('canonical',"https://pixconvertify.com/privacy-policy")
@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<section class="site-banner blog-banner">
    <div class="site-banner_container">
        <div class="site-banner-wrap">
            <div class="site-banner-left">
                <div class="banner-badge">
                    <p>PixConvertify Privacy</p>
                </div>
                <h1>
                    Our
                  <span>Privacy Policy</span>
                </h1>
                <p class="banner-message">
                    Discover More Insights Dive Deeper into Our Informative Blog Articles
                </p>
                <div class="shape">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
            <div class="site-banner-right">
                <img src="{{asset('./assets/images/privacy-policy.svg')}}" class="banner_img" alt="">
                <div class="blur">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-wrapper">
  <div class="container">
    <div class="px-content">
        <h2>Introduction</h2>
        <p>
          Welcome to PixConvertify. This Privacy Policy is intended to inform you about how we collect, use, disclose, and protect the information you provide when using our image conversion and compression services. By accessing or using our website, you agree to the terms and practices described in this policy. Please read it carefully.
        </p>
        <h2>Information We Collect</h2>
        <br>
        <h3>1. Information You Provide</h3>
        <p>
          When you use our website to convert or compress images, we may collect the following types of information:
        </p>
        <ul>
          <li><strong>Personal Information:</strong> When you register an account or use our services, we may collect</li>
          <li><strong>Image Data:</strong> We collect the images you upload for conversion or compression.</li>
          <li><strong>Usage Data:</strong> We may collect information about how you use our website, such as the pages you visit, the features you use, and your interactions with the site.</li>
        </ul>
        <h3>2. Cookies and Similar Technologies</h3>
        <p>
          We may use cookies and similar technologies to collect information about your browsing activities on our website. Cookies are small files stored on your device that help us improve user experience and track usage patterns. You can control the use of cookies through your browser settings.
        </p>
        <h3>How We Use Your Information</h3>
        <p>
          We use the information we collect for the following purposes:
          </p>
        <ul>
          <li>To provide and improve our image conversion and compression services.</li>
          <li>To personalize your experience on our website.</li>
          <li>To communicate with you, respond to your inquiries, and provide customer support.</li>
          <li>To analyze website usage and gather insights to enhance our services.</li>
          <li>To comply with legal obligations and enforce our website's terms of use.</li>
        </ul>
        <h3>Data Security</h3>
        <p>
          We take reasonable measures to protect your information from unauthorized access, alteration, disclosure, or destruction. However, no data transmission over the internet or storage system can be guaranteed as 100% secure. Therefore, while we strive to protect your information, we cannot guarantee its absolute security.
        </p>
        <h3>Your Choices and Rights</h3>
        <ul>
          <li>You can update or correct your account information by logging into your account settings.</li>
          <li>
            You can request the deletion of your account and associated data by contacting us through the provided contact information.
          </li>
          <li>
            You may choose not to provide certain information, but this may limit your access to certain features of our website.
          </li>
        </ul>
        <h3>Third-Party Links</h3>
        <p>
          Our website may contain links to third-party websites or services. Please be aware that we are not responsible for their privacy practices. We encourage you to read the privacy policies of these third-party sites.
        </p>
        <h3>Changes to this Privacy Policy</h3>
        <p>
          We reserve the right to modify this Privacy Policy at any time. Any changes will be effective immediately upon posting the revised policy on our website. We encourage you to review this policy periodically to stay informed about how we collect, use, and protect your information
        </p>
    </div>
  </div>
</div>
@endsection
