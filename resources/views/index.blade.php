@extends('layouts.master')
@isset($type)
@section('meta_title', $type->meta_title)
@section('meta_description', $type->meta_desc)
@else
@section('meta_title', 'Free File Conversion Online | Convert PNG, JPG, DOCX, GIF, PDF')
@section('meta_description', 'Experience the ease and convenience of our free file conversion tool! Convert your files effortlessly to various formats, including PNG, JPG, DOCX, GIF, and PDF. Try out our user-friendly free file conversion service today with Pixconvertify!')
@endisset

@isset($type)
@section('canonical',"https://pixconvertify.com/" . $type->slug)
@else
@section('canonical',"https://pixconvertify.com/")
@endisset 
@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<main id="main">
    <!-- BANNER SECTION -->
    <section class="site-banner site-banner-home">
        <div class="site-banner_container">
            <div class="site-banner-wrap">
                <div class="site-banner-left">
                    <div class="banner-badge">
                      @isset($type)
                      <p>{{$type->badge}}</p>
                      @else
                        <p>Convert Bulk Images at once</p>
                      @endisset
                    </div>
                    @if(isset($type) && !empty($type))  
                    <h1>
                      {{ $type->heading }}
                        <!-- <span> by Pixconvertify</span> -->
                    </h1>
                    <p class="banner-message">
                      {{ $type->banner_text }}
                    </p>
                    @else
                    <h1>
                        Effortless <span style="display: inline;">Online Conversion </span>
                         with Pixconvertify
                    </h1>
                    <p class="banner-message">
                        Transforming images has never been easier but don’t worry you are at the right place. At Pixconvertify, we empower you to convert your images seamlessly into multiple formats, unlocking endless possibilities for your visual content. It does not matter whether you’re a professional photographer, a business owner, or an individual seeking quick and efficient image format transformations, our tool is here to simplify your workflow. 
                    </p>
                    @endif
                </div>
                <div class="site-banner-right">
                    <img src="{{asset('./assets/images/banner-imag.svg')}}" class="banner_img" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- CONVERTER SECTION -->
    <section class="converter_section">
        <div class="container">
            <div class="converter_section_wrap">
                <div class="converter_section_wrap_selection">
                    <div class="converter_section_left">
                        <div class="converter_dropbox">
                            <img src="{{asset('./assets/images/drop-icon.svg')}}" alt="">
                            <h2 class="drop_file-text mt-0">Drag or Drop file here</h2>
                            <p class="restriction-text">Up to 40 files at a single time, max 20 MB each.</p>
                            <input title="" type="file" name="image" id="image" accept="image/*" multiple>
                        </div>
                    </div>
                    <div class="converter_section_right">
                        <div class="converter_section_selection">
                            <p class="converter-text">Convert To</p>
                            <div class="converter-dropdown-wrap">
                                <div class="converter-selection_box">
                                    <p class="convert-from d-none">
                                        <span id="selectedConvertFrom">...</span>
                                        <img src="{{asset('./assets/images/arrow-down.svg')}}" alt="">
                                    </p>
                                    <div class="selection-dropdown">
                                        <div class="selection-dropdown_inner">
                                            <div class="search-format-bar">
                                                <div>
                                                    <img src="{{asset('./assets/images/search-icon.svg')}}" alt="">
                                                </div>
                                                <input type="search" class="search-format">
                                            </div>
                                            <div class="row format-tabs">
                                                <div class="col s12 px-0">
                                                    <ul class="tabs">
                                                        <li class="tab col s6">
                                                            <a class="gernal-btn active" href="#images">Images</a>
                                                        </li>
                                                        <li class="tab col s6">
                                                            <a class="gernal-btn" href="#documents">Document</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="images" class="col s12 px-0">
                                                    <div class="format_wrap">
                                                        <span>PNG</span>
                                                        <span>JPEG</span>
                                                        <span>PDF</span>
                                                        <span>WEBP</span>
                                                        <span>GIF</span>
                                                        <span>DOC</span>
                                                        <span>BMP</span>
                                                        <span>AVIF</span>
                                                        <span>TIF</span>
                                                    </div>
                                                </div>
                                                <div id="documents" class="col s12 px-0">
                                                    <div class="format_wrap">
                                                        <span>WORD</span>
                                                        <span>EXCEL</span>
                                                        <span>PDF</span>
                                                        <span>DOC</span>
                                                        <span>CSV</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="./assets/images/converter-arrow.svg" alt="">
                                <div class="converter-selection_box">
                                    <p class="convert-to">
                                        <span id="selectedConvertTo">...</span>
                                        <img src="./assets/images/arrow-down.svg" alt="">
                                    </p>
                                    <div class="selection-dropdown convertTO">
                                        <div class="selection-dropdown_inner convert_to">
                                            <div class="search-format-bar">
                                                <div>
                                                    <img src="./assets/images/search-icon.svg" alt="">
                                                </div>
                                                <input type="search" class="search-format">
                                            </div>
                                            <div class="row format-tabs">
                                                <div class="col s12 px-0">
                                                    <ul class="tabs">
                                                        <li class="tab col s6">
                                                            <a class="gernal-btn active" href="#images2">Images</a>
                                                        </li>
                                                        <li class="tab col s6">
                                                            <a class="gernal-btn" href="#documents2">Document</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="images2" class="col s12 px-0">
                                                    <div class="format_wrap">
                                                        <span>PNG</span>
                                                        <span>JPEG</span>
                                                        <span>JPG</span>
                                                        <span>PDF</span>
                                                        <span>DOCX</span>
                                                        <span>WEBP</span>
                                                        <span>GIF</span>

                                                    </div>
                                                </div>
                                                <div id="documents2" class="col s12 px-0">
                                                    <div class="format_wrap">
                                                        <span>WORD</span>
                                                        <span>EXCEL</span>
                                                        <span>PDF</span>
                                                        <span>DOC</span>
                                                        <span>CSV</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="select-file waves-effect waves-light">
                                <img src="./assets/images/file-icon.svg" alt="">
                                <span>Select File</span>
                                <input type="file" title="" multiple>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="converter_section_listing">
                    <ul class="file-item-list">
                    </ul>
                    <div class="converter_section_bottom">
                        <div class="converter_section_inner">
                            <button class="add-more-file select-file waves-effect waves-light ml-0">
                                <img src="./assets/images/file-icon.svg" alt="">
                                <span>Add More File</span>
                                <input type="file" title="" multiple>
                            </button>
                            <div class="footer_btn_wrap">
                                <button id="convertButton" type="submit" class="convert-file waves-effect waves-light">
                                    <img src="./assets/images/convert-icon.svg" alt="">
                                    <span>Convert</span>
                                </button>
                                <button class="download-all-files waves-effect waves-light d-none">
                                    <img src="./assets/images/download-arrow.svg" alt="">
                                    <span>Download All</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="pormotion_section">
      <div class="container">
          <div class="pormotion-slider owl-carousel owl-theme">
              <div class="pormotion-slider_item">
                <img src="{{asset('./assets/images/home-flyer.png')}}" class="show-on-web" alt="Image Convertion Made Effortless with Pixconvertify">
                <img src="{{asset('./assets/images/home-flyer-mbl.png')}}" class="show-on-mbl" alt="Image Convertion Made Effortless with Pixconvertify">
              </div>
          </div>
        </div>
    </div>

    <section class="section-convertion-and-format">
      <div class="container">
      @if(isset($type) && !empty($type))  
      <h2 class="h1 center mb-5">{{$type->section_heading}}</span></h2>
      @else
        <h2 class="h1 center mb-5">Compressing and Converting <span class="theme-color">PNG</span>/<span class="theme-color">JPG</span>/<span class="theme-color">GIF</span>/<span class="theme-color">WebP</span>/<span class="theme-color">PDF</span>/ and <span class="theme-color">DOCX</span></h2>
       @endif
        <div class="flex-wrap align-items-start">
        @if(isset($type) && !empty($type) && isset($type->content) && !empty($type->content) && count($type->content) > 0)  

        @foreach($type->content as $key => $c)
        <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">{{$c->heading}}</h3>
                  <div class="content-p">
                    {!!$c->content!!}
                  </div>
                </div>
              </div>
          </div>
        @endforeach

        @else
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">JPEG/JPG</h3>
                  <p class="content-p">
                   This format of image is mostly used. JPEG/JPG uses a lossy compression format for digital images. Its algorithm is designed so that it reduces the file size of images while maintaining a visually acceptable level of quality. 
                   This format is ideal for complex images and also for photographs. This JPEG/JPG has a smaller file size by comparing the size with all other formats. It supports the RGB color space that's why it can represent millions of colors.
                    JPEG/JPG allows the user to adjust the compression level when saving the image. Higher compression levels result in smaller file sizes but during this image will lose fine details.
                    There is no inherent difference between JPG and JPEG in terms of the image format itself. Both refer to the same file format which is developed by the Joint Photographic Experts Group. The only difference which lies between them is in their file extension. 
                  <p>
                </div>
                <img src="{{asset('./assets/images/file-format.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
            <h3 class="heading-md">PNG</h3>
              <p class="content-p">
                PNG uses a lossless compression method, without sacrificing the quality of the image it preserves all image data.
                PNG supports various color depths which include 24-bit RGB color and 8-bit indexed color that allow up to 256 colors. PNG is suitable for sharp transitions, graphics, text, or for those images which require transparent backgrounds. PNG also supports alpha channel transparency that allows each part of the image to be fully transparent.
                Due to its lossless compression method, PNG maintains its high image quality even after multiple edits. This makes PNG an ideal choice for images that require multiple edits like logos, web graphics, and illustrations, and for images that require transparent backgrounds.
              <p>
              </div>
                <img src="{{asset('./assets/images/question.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">PDF</h3>
                  <p class="content-p">
                  PDF stands for Portable Document Format and this file format is used to present and exchange the documents reliably. PDF format is developed by Adobe. PDF files can contain text, images, hyperlinks, interactive buttons, forms, videos, and many other important elements. 
                  PDF prevents the original formatting and layout of the file. PDF file is platform-independent. It contains a fixed layout. PDF files can be password protected, prevented from any unauthorized access, and edited. 
                  PDF files support various compression algorithms without compromising the quality of the original file. Overall, PDF is mostly used for sharing different files in everyday applications and various industries. 
                  <p>
              </div>
                <img src="{{asset('./assets/images/pdf.svg')}}" alt="">
            </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                <h3 class="heading-md">DOCX</h3>
                  <p class="content-p">
                    DOCX is a famous file format developed by Microsoft. DOCX is the default format for the documents created by Microsoft Word. 
                    DOCX is based on XML which is a file format for documents that is readable for both machines as well as humans. DOCX supports a wide array of formatting options which includes fonts, styles, headings, tables, images, hyperlinks, bullet points, and other elements. 
                    As DOCX is primarily associated with Microsoft Word that’s why it can be opened, edited, and viewed using other word processing software. Overall, DOCX is widely used for creating and sharing documents due to its flexibility and rich features. DOCX almost replaced the older format .doc and became standard for word processing documents. 

                  <p>
                  </div>
                  <img src="{{asset('./assets/images/speed.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                <h3 class="heading-md">WEBP</h3>
                  <p class="content-p">
                    WEBP is a modern image format which is developed by Google in 2010. WEBP was developed to provide a more efficient way to store images on the internet. 
                    WEBP provides superior compression and quality characteristics as compared to other traditional formats like JPEG, PNG, and GIF. WEBP provides both lossy and lossless compression techniques. 
                    As compared to other traditional file formats WEBP can achieve smaller file sizes without losing that much detail. WEBP supports alpha channel transparency. Additionally, WEBP also supports animations which provide a more efficient alternative to GIF animations.
                    Due to its ability to offer higher quality with smaller file sizes, WEBP has gained huge popularity in recent years. Especially in web development where optimizing images for faster speeds is crucial. Overall WEBP is a versatile image format. 
                  </p>
              </div>
              <img src="{{asset('./assets/images/image-file.svg')}}" alt="">
            </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">GIF</h3>
                  <p class="content-p">
                    GIF stands for “ Graphics Interchange Format”. GIF format is a widely used bitmap image format which is developed by CompuServe. Initially, GIFs were primarily used for simple graphics and images. But later on, GIFs became famous for their short animations and looping sequences. 
                    GIFs support a maximum of 256 colors from a palette of 24-bit RGB colors. This limited color range makes GIFs less suitable for higher-resolution images. GIFs are famous due to their capability to store multiple frames within a single frame. It allows to creation of simple animations. 
                    GIF uses a lossless compression algorithm which means that it will prevent all origianlity of the image. GIFs are widely used in memes, reactions, tutorials, and as an engaging form of visual communication on social media platforms, forums, and messaging apps. 
                  <p>
                </div>
                <img src="{{asset('./assets/images/file-format.svg')}}" alt="">
              </div>
          </div>
        @endif
        </div>
      </div>
    </section>

    <!-- How its work -->
    <section class="how-its-work">
        <div class="container">
            <h2>How does it work?</h2>
            <div class="how-its-work_wrap">
                <div class="how-its-work_item">
                    <img class="icons-image" src="{{asset('./assets/images/file.svg')}}" alt="">
                    <h3>Step 1</h3>
                    <p>Simply upload your image files or drag and drop your image files directly onto our platform. </p>
                </div>
                <div class="how-its-work_item">
                    <img src="{{asset('./assets/images/format.svg')}}" class="icons-image" alt="">
                    <h3>Step 2</h3>
                    <p>Choose the Desired Output Format for your converted images from our extensive list.</p>
                </div>
                <div class="how-its-work_item">
                    <img class="icons-image" src="{{asset('./assets/images/download.svg')}}" alt="">
                    <h3>Step 3</h3>
                    <p>Once the conversion is complete, download your converted images.</p>
                </div>
            </div>
        </div>
    </section>

    @if(empty($type))
    <section class="sec_check_responsiveness">
      <div class="container">
        <h2 class="h2">Convert Bulk Images at Once </h2>
        <div class="sec_check_row">
          <div class="sec_check">
            <p>
                Pixconvertify is a powerful and user-friendly online tool that simplifies your image conversion needs. With the help of our powerful tool Pixconvertify, you can effortlessly convert multiple images simultaneously into various formats without compromising original quality.
            </p>
            <p>
                Bulk conversion refers to transforming multiple files simultaneously from one format to another. Bulk conversion saves time and effort as compared to converting each file individually. 
            </p>
          </div>
          <h3 class="h3 mb-0">How Bulk Conversion Works:</h3>
          <ul>
            <li><strong>Step 1: </strong>Simply upload the batch of images to the tool.</li>
            <li><strong>Step 2: </strong>Specify the desired output formats for the conversion process. </li>
            <li><strong>Step 3: </strong>Initiate the Conversion Process and watch your images are swiftly transformed into the chosen format.</li>
            <li><strong>Step 4: </strong>Once the conversion is complete, download the converted images.</li>
          </ul>
          <h3 class="h3 mb-0">Ensuring Your Data Security:</h3>
          <p>
            At Pixconvertify, we understand the importance of safeguarding your data. We employ the best security measures to protect all your uploaded data for image conversion. Our platform integrates the latest protocols to secure your files during transmission and storage, Your privacy is our priority, and we maintain strict confidentiality standards. 
          </p>
          <h3 class="h3 mb-0">High-Quality Conversions: </h3>
          <p>
            Experience image conversion like never before with Pixconvertify. Our cutting-edge technology ensures high-quality conversions. Our platform maintains exceptional clarity and accuracy, meeting the best quality standards from various file formats to different formats. Get ready for stunning, flawless results every time you convert with us.
          </p>
          <h3 class="h3 mb-0">Powerful API:</h3>
          <p>
            Unlock the full potential of image conversion with pixconvertify’s powerful API. Our developer-friendly API empowers seamless integration into your applications and workflows. Providing you the coprehenseve suite of functionalities for image processing. From batch conversions to custom solutions, our AOI delivers unparalleded flexibility and scalability, allowing you to the harness the full power of the image conversion in your projects
          </p>
          <h3 class="h3 mb-0">All Devices Supported:</h3>
          <p>
            Experience the convenience of image conversion on any device with Pixconvertify. Our platform ensures seamless usability across all devices, including desktops, laptops, tablets, and smartphones. Whether you're at home, in the office, or on the go, our user-friendly interface adapts effortlessly to your screen size and device specifications. 
          </p>
          <h3 class="h3 mb-0">All Conversions in the Cloud:</h3>
          <p>
            At Pixconvertify, all your image conversions happen seamlessly in the cloud. You can initiate and monitor conversions from any device with internet access, allowing for efficient and convenient image processing without the need for high-end hardware. Rest assured, your files remain secure and accessible throughout the conversion process, giving you peace of mind and delivering exceptional results.
          </p>
          <h3 class="h3 mb-0">Fast and Easy to Use:</h3>
          <p>
            At Pixconvertify, we prioritize speed and simplicity to ensure a fast and easy image conversion experience. Our streamlined interface is intuitively designed, enabling users to swiftly navigate through the conversion process with minimal effort. With just a few clicks, users can upload their images and seamlessly convert them into their desired formats or resolutions. Leveraging advanced technology and optimized workflows, our platform executes conversions swiftly, delivering rapid results without compromising on quality. We have eliminated unnecessary complexities, allowing users to effortlessly access our tool from any device .
          </p>
        </div>
      </div>
    </section>
    @endif

</main>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.1.0/jszip-utils.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


<script>
  $(document).ready(function() {
    var files = []; // Store the selected files
    var convertedFiles = []; // Store the converted files
    var conversionInProgress = false;

    var urlPath = window.location.pathname;
    var allowedFormats = urlPath.split('/').filter(function(segment) {
      return segment !== '';
    });

  var allowedInputFormat, allowedConversionFormat;

  if (allowedFormats.length === 1) {
    var formatParts = allowedFormats[0].split('-to-');
    if (formatParts.length === 2) {
      var allowedInputFormat = formatParts[0];
      var allowedConversionFormat = formatParts[1];
      console.log('Allowed Input Format:', allowedInputFormat);
      console.log('Allowed Conversion Format:', allowedConversionFormat);
      $('#selectedConvertTo').text(allowedConversionFormat);
      $("#selectedConvertTo").addClass('disabled-dropdown');
    } else {
      console.log('Invalid URL format');
    }
  } else {
    console.log('Invalid URL format');
  }

    // Handle file selection
    $('input[type=file]').change(function(e) {
      var selectedFormat = $('#selectedConvertTo').text();



      var selectedFiles = e.target.files;

  for (var i = 0; i < selectedFiles.length; i++) {
    var file = selectedFiles[i];
    var selectedExtension = file.name.split('.').pop().toLowerCase();
    
  var allowedFormats = ['png', 'webp', 'gif', 'jpg', 'jpeg'];
    if (formatParts && formatParts.length === 2) {
      var allowedFormats = ['png', 'webp', 'gif', 'jpg', 'jpeg',formatParts[0],formatParts[1]];
    }

    if (allowedFormats.indexOf(selectedExtension) === -1) {
      // Show an error message indicating the allowed formats
      Snackbar.show({
            pos: 'bottom-center',
            text: 'Please select files in PNG, WEBP, GIF, JPG, or JPEG format only.',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });

      $(this).val('');
      return;
    }
  }



      if(allowedInputFormat && allowedConversionFormat){
        var selectedFiles = e.target.files;
        for (var i = 0; i < selectedFiles.length; i++) {
        var file = selectedFiles[i];
        var selectedExtension = file.name.split('.').pop();

      if (allowedInputFormat && selectedExtension.toLowerCase() !== allowedInputFormat.toLowerCase()) {  
          // Show an error message indicating the allowed input format
          Snackbar.show({
            pos: 'bottom-center',
            text: 'Please select files in ' + allowedInputFormat + ' format only.',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
          // var beepSound = new Audio('assets/sounds/error.mp3'); 
          // beepSound.play();
          $(this).val('');
          return;
        }
      }
    }
      

    

      // If conversion is not in progress, handle the files immediately
      if (!conversionInProgress) {
        handleFiles(e.target.files);
      } else {
          var newFiles = Array.from(e.target.files).filter(function(file) {
        return !convertedFiles.some(function(convertedFile) {
          return convertedFile.filename === file.name;
        });
      });
      files = files.concat(newFiles);
      }
    });

    // Handle file drag and drop
    var isDragging = false; // Track dragging state

    $('body').on('dragover', function(e) {
      e.preventDefault();
      if (!isDragging) {
        $(this).addClass('dragover');
        isDragging = true;
      }
    });

    $('body').on('dragleave', function(e) {
      e.preventDefault();
      var target = e.target;
      var rect = target.getBoundingClientRect();
      var x = e.clientX;
      var y = e.clientY;
      
      // Check if the mouse cursor is outside the target element
      if (x < rect.left || x >= rect.right || y < rect.top || y >= rect.bottom) {
        $(this).removeClass('dragover');
        isDragging = false;
      }
    });

    $('body').on('drop', function(e) {
      e.preventDefault();
      $(this).removeClass('dragover');
      handleFiles(e.originalEvent.dataTransfer.files);
    });

    // Add overlay when dragging starts
    $('body').on('dragenter', function(e) {
      e.preventDefault();
      $(this).addClass('dragover');
    });

    // Remove overlay when dragging ends
    $('body').on('dragend', function(e) {
      e.preventDefault();
      $(this).removeClass('dragover');
    });

    // Convert image on button click
    $('.convert-file').click(function() {

      if (files.length > 40) {

        Snackbar.show({
            pos: 'bottom-center',
            text: 'You can only convert 10 images at a time.',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
        
    return;
  }

      var selectedFormat = $('.selectedConvertFrom').text();
      console.log(selectedFormat);
    if (/^\.{2,}$/.test(selectedFormat)) {
          showErrorToast()
          return;
    }else{
      convertImages(files);

    }

    function showErrorToast() {

      Snackbar.show({
            pos: 'bottom-center',
            text: 'Please select conversion format first!',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
  }
  });
  // Download all converted images as a zip file
  $('.download-all-files').click(function() {
      if (convertedFiles.length > 0) {
        downloadAsZip(convertedFiles);
      }
  });

  $('.converter-dropdown-wrap').on('click', '.format_wrap span', function() {
    var selectedFormat = $(this).text();
    $('.selectedConvertFrom').text(selectedFormat);
  });

  function handleFiles(selectedFiles) {
  for (var i = 0; i < selectedFiles.length; i++) {
    var file = selectedFiles[i];
    // var fileSize = (file.size / 1024).toFixed(2) + ' KB';
    var fileSize;
    var fileSizeKB = file.size / 1024;

    if (fileSizeKB >= 1024) {
      var fileSizeMB = fileSizeKB / 1024;
      fileSize = fileSizeMB.toFixed(2) + ' MB';
    } else {
      fileSize = fileSizeKB.toFixed(2) + ' KB';
    }

    var selectedExtension = file.name.split('.').pop().toLowerCase();  
    
  var allowedFormats = ['png', 'webp', 'gif', 'jpg', 'jpeg'];

    if (formatParts && formatParts.length === 2) {
      var allowedFormats = ['png', 'webp', 'gif', 'jpg', 'jpeg',formatParts[0],formatParts[1]];
    }

     if (allowedFormats.indexOf(selectedExtension) === -1) {
      // Show an error message indicating the allowed formats
      Snackbar.show({
            pos: 'bottom-center',
            text: 'Please select files in PNG, WEBP, GIF, JPG, or JPEG format only.',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
        
      $(this).val('');
      return;
  }


  console.log(fileSize);

  var reader = new FileReader();

      reader.onload = (function(file) {
        return function(e) {
          var $item = $('<div class="converter_item">');
          var $itemContent = $('<div class="converter_item_name_size">');
          var $img = $('<img class="defualt-img" alt="">');
          var $fileName = $('<p class="file-name">').text(file.name);
          var $fileSize = $('<span class="file-size">').text(fileSize);
          // Calculate the file size in KB
          var fileSizeInKB = Math.round(file.size / 1024);
          $fileSize.text(fileSizeInKB + " KB"); // Display the calculated size
          var $progressWrap = $('<div class="progress_wrap d-none">');
          var $progressBar = $('<div class="progress-bar progress-bar-success progress-bar-striped active d-none">');
          var $progress = $('<div class="progress d-none" style="width: 0%;">');
          var $processPercentage = $('<p class="process-percentage d-none">');
          var $processingBtn = $('<button class="processing waves-effect waves-light d-none">Processing</button>');
          var $downloadBtn = $('<button class="downloading-btn waves-effect waves-light d-none">').append($('<img src="./assets/images/download-arrow.svg" alt="">')).append($('<span>').text('Download File'));
          var $deleteBtn = $('<button class="delete-button">').append($('<img src="./assets/images/dustbin.svg" alt="">'));
          var $checkBtn = $('<div class="check-button d-none">').append($('<img src="./assets/images/checkbox-icon.svg" alt="">'));
          var $dropdown = $('<div class="converter-section-selection">')
                          .append($('<p class="converter-text converter-text-listed">Convert To</p>'))
                          .append($('<div class="converter-dropdown-wrap">')
                          .append($('<div class="converter-selection_box">')
                          .append($('<p class="convert-from">')
                          .append($('<span class="selectedConvertFrom">').text('...'))
                          .append($('<img src="./assets/images/arrow-down.svg" alt="">')))
                          .append($('<div class="selection-dropdown">')
                          .append($('<div class="selection-dropdown_inner">')
                          .append($('<div class="format_wrap">')
                          .append($('<span>').text('PNG'))
                          .append($('<span>').text('JPEG'))
                          .append($('<span>').text('JPG'))
                          .append($('<span>').text('WEBP'))
                          .append($('<span>').text('GIF'))
                          .append($('<span>').text('PDF'))
                          .append($('<span>').text('DOCX'))
                          // .append($('<span>').text('BMP'))
                          // .append($('<span>').text('AVIF'))
                          // .append($('<span>').text('TIF'))
                            )
                          )
                          )
                          )
                          );

          $img.attr('src','./assets/images/defualt-img-icon.svg');
          $itemContent.append($img).append($('<div>').append($fileName).append($fileSize));
          $progressBar.append($progress);
          $progressWrap.append($progressBar).append($processPercentage);
          $item.append($itemContent).append($progressWrap).append($dropdown).append($('<div class="processing-and-download-and-delete">').append($processingBtn).append($downloadBtn).append($deleteBtn).append($checkBtn));
          
          // Append the new converter item
          $('.converter_section_listing ul').append($item);
          $('.converter_section_bottom').show();

          $dropdown.on('click', function() {
            if(!allowedInputFormat && !allowedConversionFormat){
            $(this).find('.selection-dropdown').toggleClass('open');
            }
          });

          $deleteBtn.on('click', function() {
          var index = $('.delete-button').index(this);
          files.splice(index, 1); 
          $(this).closest('.converter_item').remove(); 
          });

          $dropdown.find('.format_wrap span').on('click', function() {
            var selectedFormat = $(this).text();
            $dropdown.find('.selectedConvertFrom').text(selectedFormat);
          });

            // Pre-select the format based on the value of selectedConvertTo
          var preselectedFormat = $('#selectedConvertTo').text();
          $dropdown.find('.selectedConvertFrom').text(preselectedFormat);


            files.push(file); // Add the file to the files array
          };
        })(file);

        
      reader.readAsDataURL(file);
    }
  }



  function convertImages(files) {
    conversionInProgress = true;

    $('.convert-file').attr('disabled', 'disabled'); // Disable convert button
    $('.delete-button').attr('disabled', 'disabled'); // Disable delete buttons
    $('.delete-button').addClass('d-none');

    var totalFiles = files.length;
    var successfulConversions = 0; 
  //   var format = $('#selectedConvertTo').text(); // Get the selected format
    $.each(files, function(index, file) {

      var $item = $('.converter_item').eq(index);
      var $dropdown = $item.find('.converter-section-selection');
      var selectedFormat = $dropdown.find('.selectedConvertFrom').text(); 
      console.log(selectedFormat);
      $dropdown.addClass('d-none');

      // Check if the file has already been converted
      if (convertedFiles.some(function(convertedFile) {
        return convertedFile.data === file;
      })) {
        // Skip the conversion for already converted files
        if (index === files.length - 1) {
          // Enable delete buttons
          $('.delete-button').removeAttr('disabled');
        }
        updateConvertButtonState();
        return true;
      }

      var formData = new FormData();
      formData.append('image', file);
      formData.append('format', selectedFormat);

      // Find the corresponding item in the list
      var $item = $('.converter_item').eq(index);
      var $progressWrap = $item.find('.progress_wrap');
      var $progressBar = $item.find('.progress-bar');
      var $progress = $item.find('.progress');
      var $processPercentage = $item.find('.process-percentage');
      var $processingBtn = $item.find('.processing');
      var $downloadBtn = $item.find('.downloading-btn');
      $progress.css('width', '0%');
      $processPercentage.text('0%');
      $progressWrap.removeClass('d-none');
      $progressBar.removeClass('d-none');
      $progress.removeClass('d-none');
      $processPercentage.removeClass('d-none');

      $processingBtn.removeClass('d-none');
      $downloadBtn.addClass('d-none');

      // Simulated progress increase
      var progress = 0;
      var progressInterval = setInterval(function() {
        if (progress < 80) {
          progress += 5;
          $progress.css('width', progress + '%');
          $processPercentage.text(progress + '%');
        }
      }, 500); // Adjust the interval as needed

      $.ajax({
        url: '/api/convert-image', // Replace with the actual URL for your Laravel route
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          clearInterval(progressInterval);
          if (response.success) {
            console.log('Conversion success:', response);
            $progress.css('width', '100%');
            $processPercentage.text('100%');
            successfulConversions++;

            $downloadBtn.attr('href', response.url);
            $downloadBtn.attr('download', response.filename); // Set the download attribute
            $downloadBtn.removeClass('d-none');
            $processingBtn.addClass('d-none');
            $item.find('.check-button').removeClass('d-none');

            convertedFiles.push({
              data: file,
              url: response.url,
              filename: response.filename
            });

            if (successfulConversions === totalFiles) {
              // If all files have been successfully converted
              $('.download-all-files').removeClass('d-none');
                showShareButton();
              // Show the "Download All" button
            }

            $downloadBtn.on('click', function(e) {
              e.preventDefault();
              var downloadUrl = $(this).attr('href');
              var downloadFilename = $(this).attr('download');

              // Create a temporary link element and set its attributes
              var link = document.createElement('a');
              link.href = downloadUrl;
              link.download = downloadFilename;

              // Programmatically trigger the download
              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
            });
          }
        },

        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        },
        complete: function() {
          console.log(successfulConversions);
          console.log(files.length);

          if (index === files.length - 1) {
            $('.delete-button').removeAttr('disabled');
          
          }
          updateConvertButtonState();
          conversionInProgress = false;
          files = [];
        }
      });
    });
  }
  
  function validateEmail(email) {
    // Regular expression pattern to validate email format
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
  }

  function showShareButton() {
    var $shareButton = $('<div> <button class="share-button waves-effect waves-light">Share</button> </div>');
    $('.download-all-files').after($shareButton);
    $shareButton.click(function() {
      showSharePopup();
    });
  }

  function updateConvertButtonState() {
      if (files.length > 0) {
        $('.convert-file').removeAttr('disabled'); // Enable convert button
      } else {
        $('.convert-file').attr('disabled', 'disabled'); // Disable convert button
      }
    }


    function showSharePopup() {
    Swal.fire({
      title: 'Share Converted Images',
      html: '<input type="email" id="email-input" class="swal2-input" placeholder="Enter your email address">',
      showCancelButton: true,
      confirmButtonText: 'Share',
      allowOutsideClick: true,
      didOpen: function() {
        var emailInput = document.getElementById('email-input');
        emailInput.addEventListener('input', function(event) {
          Swal.enableButtons(); // Enable confirm and cancel buttons
          Swal.resetValidationMessage();
        });
      },
      preConfirm: function() {
        var email = document.getElementById('email-input').value;
        if (validateEmail(email)) {
          return email;
        } else {
          Swal.showValidationMessage('Invalid email address');
          return false;
        }
      }
    }).then(function(result) {
      if (result.isConfirmed && result.value) {
        sendEmailWithImages(result.value);
      }
    });
  }



  function sendEmailWithImages(email) {
    var convertedImagePaths = [];
    convertedFiles.forEach(function(convertedFile) {
      convertedImagePaths.push(convertedFile.url); // Assuming each converted file has a 'url' property storing the file path or URL
    });

    $.ajax({
      url: '/api/send-email-with-images', // Replace with the actual URL for your Laravel route
      method: 'POST',
      data: {
        email: email,
        converted_images: convertedImagePaths
      },
      success: function(response) {
        console.log(response)
        // Handle the success response from the controller
        Swal.fire('Email Sent', 'The converted images have been sent to your email address.', 'success');
      },
      error: function(xhr, status, error) {
        // Handle the error response from the controller
        Swal.fire('Error', 'Failed to send email.', 'error');
      }
    });
  }
  function downloadAsZip(convertedFiles) {
    var zip = new JSZip();

    var downloadCount = 0;
    $.each(convertedFiles, function(index, file) {
      var filename = file.filename;
      var url = file.url;

      JSZipUtils.getBinaryContent(url, function(err, data) {
        if (err) {
          console.error(err);
          return;
        }

        zip.file(filename, data, { binary: true });

        downloadCount++;
        if (downloadCount === convertedFiles.length) {
          zip.generateAsync({ type: 'blob' }).then(function(content) {
            saveAs(content, 'PixConvertify.zip');
          });
        }
      });
    });
  }
  });

</script>

@endsection
