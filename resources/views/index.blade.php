@extends('layouts.master')
@isset($format)
<?php
  $words = explode('-', $format);
  $first_word = strtoupper($words[0]);
  $last_word = strtoupper($words[count($words) - 1]);
?>
@section('meta_title', 'Free Onine '.$first_word.' to '.$last_word.' Converter | PixConvertify')
@section('meta_description', 'Welcome to PixConvertify, your go-to platform for quick and dependable picture conversion. Convert '.$first_word.' to '.$last_word.' formats effortlessly and enjoy high-quality results. Experience the convenience of our user-friendly interface and make your pictures shine in just a few clicks. Try PixConvertify today and unleash the potential of your images!')
@else
@section('meta_title', 'PixConvertify | Fast and Reliable Picture Conversion Services')
@section('meta_description', 'Welcome to PixConvertify, your go-to platform for quick and dependable picture conversion. Convert images to various formats effortlessly and enjoy high-quality results. Experience the convenience of our user-friendly interface and make your pictures shine in just a few clicks. Try PixConvertify today and unleash the potential of your images!')
@endisset

@isset($format)
@section('canonical',"https://pixconvertify.com/" . $format)
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
    <section class="site-banner">
        <div class="site-banner_container">
            <div class="site-banner-wrap">
                <div class="site-banner-left">
                    <div class="banner-badge">
                        <p>Convert Bulk Images at once</p>
                    </div>
                    @if(!empty($format))
                      <?php
                      $words = explode('-', $format);
                      $first_word = strtoupper($words[0]);
                      $last_word = strtoupper($words[count($words) - 1]);
                      ?>
                    <h1>
                       {{$first_word}} TO {{$last_word}}
                        <span>converter by Pixconvertify</span>
                    </h1>
                    <p class="banner-message">
                        Securely Convert Up to 10 Files from {{$first_word}} to {{$last_word}} with pix convertify.
                    </p>
                    @else
                    <h1>
                        File Converter by 
                        <span>Pixconvertify</span>
                    </h1>
                    <p class="banner-message">
                        Pixconvertify Unlock the power of our versatile image format converter tool. Optimize your site with smaller, top-quality images effortlessly. We support WebP, PNG, JPG, JPEG, GIF, and PDF conversions, simplifying your web image management.
                    </p>
                    @endif
                    <div class="shape">
                        <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                    </div>
                </div>
                <div class="site-banner-right">
                    <img src="{{asset('./assets/images/banner-imag.svg')}}" class="banner_img" alt="">
                    <div class="blur">
                        <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                    </div>
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
                            <p class="restriction-text">Up to 40 files at a single time, max 5 MB each.</p>
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
                                                        <span>PDF</span>
                                                        <span>DOCX</span>
                                                        <span>WEBP</span>
                                                        <span>GIF</span>
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
              {{-- <div class="pormotion-slider_item">
                <a href="{{route('get-justcompress')}}">
                  <img src="{{asset('./assets/images/home-flyer2.png')}}" alt="">
                </a>
              </div> --}}
          </div>
        </div>
    </div>

    <section class="section-convertion-and-format">
      <div class="container">
        <h2 class="h1 center mb-5">Converting and Compressing <span class="theme-color">PNG</span>/<span class="theme-color">JPG</span>/<span class="theme-color">GIF</span>/<span class="theme-color">WebP</span>/<span class="theme-color">PDF</span>/ and <span class="theme-color">DOCX</span></h2>

        <div class="flex-wrap">
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">What is the Best Compressed Image Format?</h3>
                  <p class="content-p">
                    We all understand the need to make our websites load quickly without sacrificing image quality. So, let's dive into the search for the best compressed image format together. When it comes to finding the most compressed image format, we're all on the same mission: to discover the top picture format for high resolution with minimal compression. In this journey, we're not just looking into PNG compression; we're also exploring the conversion of PNG to WebP.
                  <p>
                </div>
                <img src="{{asset('./assets/images/file-format.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
            <h3 class="heading-md"> Is JPG and JPEG the Same?</h3>
              <p class="content-p">
                  Are JPG and JPEG interchangeable? Absolutely! In the world of image formats, JPG (or JPEG, as it's often called) is the go-to choice. It's perfect for photos and images on the web, offering a good balance between quality and size. On the other hand, formats like WebP and PNG have their strengths, excelling in different scenarios. So, while JPG and JPEG are practically twins, don't hesitate to explore other formats like WebP and PNG based on your project's unique needs.
              <p>
              </div>
                <img src="{{asset('./assets/images/question.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md"> Is WebP Better Than JPG?</h3>
                  <p class="content-p">
                    For those seeking efficient image conversion online, WebP emerges as a top choice. Its ability to compress images while preserving quality surpasses JPG. You can easily convert WebP to JPG, PNG, or GIF using online converters. These tools ensure your website benefits from smaller, high-quality images. When optimizing your site, consider the advantages of WebP, making it a preferred option over JPG for achieving top-notch performance without compromising visual appeal.
                  <p>
              </div>
                <img src="{{asset('./assets/images/image-file.svg')}}" alt="">
            </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                <h3 class="heading-md">Compress images for website speed</h3>
                  <p class="content-p">
                    Enhance your website's performance by reducing load times with image compression. Our smooth compression process effectively reduces image sizes, supercharging your site's load times for a quicker, more efficient user experience. Benefit from faster loading speeds, improved SEO rankings, and seamless website optimization without any fuss. <a class="theme-color" href="{{route('get-justcompress')}}">Try our file compressor</a>
                  <p>
                  </div>
                  <img src="{{asset('./assets/images/speed.svg')}}" alt="">
              </div>
          </div>
          <div class="flex-100">
            <div class="flex-inner">              
              <div>
                <h3 class="heading-md">Conversion of doc to pdf with PixConvertify</h3>
                  <p class="content-p">
                    Discover the convenience of PixConvertify's document conversion services. Our doc converter can easily convert PDF to Word, while also offering doc to pdf conversion. Need image to doc conversion? No problem! PixConvertify's versatile tools handle it all. With our doc file converter, format changes are a breeze. Experience the simplicity of doc conversion to pdf and more, all in one place.
                     <a href="{{ route('base', ['format' => 'docx-to-pdf']) }}">Try it Now for Free</a>
                  </p>
              </div>
              <img src="{{asset('./assets/images/pdf.svg')}}" alt="">
            </div>
          </div>
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
                    <p>Upload Your File</p>
                </div>
                <div class="how-its-work_item">
                    <img src="{{asset('./assets/images/format.svg')}}" class="icons-image" alt="">
                    <h3>Step 2</h3>
                    <p>Select Output Format</p>
                </div>
                <div class="how-its-work_item">
                    <img class="icons-image" src="{{asset('./assets/images/download.svg')}}" alt="">
                    <h3>Step 3</h3>
                    <p>Download Your Converted Image</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_check_responsiveness">
      <div class="container">
        <h2 class="h2">Pixconvertify Introduces Our Responsive Website Checker! </h2>
        <div class="sec_check_row">
        <div class="sec_check">
          <p>
              Is your website ready to impress users on any device? Find out the secret to creating amazing experiences across different screens with our advanced Responsive Website Checker! 🚀
          </p>
          <p>
              Forget about blurry screens and frustrating scrolling. Our tool makes it easy for you to check how well your website adapts to smartphones, tablets, laptops, and more. Unlock the potential of a seamless browsing experience that works perfectly on every screen size.
          </p>
          <p>
              But that's not all! At Pixconvertify, we're excited to introduce two more fantastic tools to enhance your website: our Image Compression and Image Conversion tools. With us, you can now optimize your images and convert them effortlessly. Stay tuned for more ways to improve your website!"
          </p>
          <a href="{{route('get-checkrespo')}}" class="theme-btn site_signin waves-effect waves-light mt-2">Check Responsiveness</a>
        </div>
        <div class="sec_check">
          <img src="{{asset('assets/images/ccc.png')}}" class="obj_fit" alt="">
        </div>
      </div>
      </div>
    </section>

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
