@extends('layouts.master')

@section('meta_title', 'Home')
@section('meta_description', '')
@section('canonical',"")

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
                        <p>Convert your files to any format</p>
                    </div>
                    @if(!empty($format) && $format == 'png-to-webp')
                    <h1>
                       PNG TO WEBP
                        <span>converter</span>
                    </h1>
                    <p class="banner-message">
                        Securely convert Up to 20 files from PNG to WEBP at a single time.
                    </p>
                    @else
                    <h1>
                        Free online file
                        <span>converter</span>
                    </h1>
                    <p class="banner-message">
                        Securely convert Up to 20 files at a single time. Lots of media and document formats are
                        supported.
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
                                <p class="restriction-text">Up to 20 files at a single time, max 20 MB each.</p>
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
                                                            <span>WEBP</span>
                                                            <span>GIF</span>
                                                            <span>DOC</span>
                                                            <span>BMP</span>
                                                            <span>AVIF</span>
                                                            <span>TIF</span>
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


    <!-- How its work -->
    <section class="how-its-work">
        <div class="container">
            <h2>How does it work?</h2>
            <div class="how-its-work_wrap">
                <div class="how-its-work_item">
                    <img src="{{asset('./assets/images/file.svg')}}" alt="">
                    <h3>Step 1</h3>
                    <p>Select a file from your devices.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="{{asset('./assets/images/format.svg')}}" class="icons-image" alt="">
                    <h3>Step 2</h3>
                    <p>Choose a destination format.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="{{asset('./assets/images/download.svg')}}" alt="">
                    <h3>Step 3</h3>
                    <p>Download your converted file immediately.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="drag-and-drop_overlay">
      <div>
        <h3>Please Drop Your file Here</h3>
      </div>
    </div>

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

      if(allowedInputFormat && allowedConversionFormat){
        var selectedFiles = e.target.files;
        for (var i = 0; i < selectedFiles.length; i++) {
        var file = selectedFiles[i];
        var selectedExtension = file.name.split('.').pop();

      if (allowedInputFormat && selectedExtension.toLowerCase() !== allowedInputFormat.toLowerCase()) {  
          // Show an error message indicating the allowed input format
          var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      })
      Toast.fire({
          icon: 'error',
          title: 'Please select files in ' + allowedInputFormat + ' format only.'
      })
          var beepSound = new Audio('assets/sounds/error.mp3'); 
          beepSound.play();
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
      var selectedFormat = $('.selectedConvertFrom').text();
      console.log(selectedFormat);
    if (/^\.{2,}$/.test(selectedFormat)) {
          showErrorToast()
          return;
    }else{
      convertImages(files);

    }

    function showErrorToast() {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Please select conversion format first!',
      footer: '<a href="/">Why do I have this issue?</a>',
      customClass: {
        popup: 'swal2-toast-error', // Add the custom CSS class
      },
      showConfirmButton: false, // Remove the default "Ok" button
    // Auto-close after 3 seconds
      timerProgressBar: true, // Show progress bar
      allowOutsideClick: true, // Prevent dismissing by clicking outside the toast
      allowEscapeKey: true, // Prevent dismissing by pressing the escape key
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
      }
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

  console.log(fileSize);

  var reader = new FileReader();

      reader.onload = (function(file) {
        return function(e) {
          var $item = $('<div class="converter_item">');
          var $itemContent = $('<div class="converter_item_name_size">');
          var $img = $('<img class="defualt-img" alt="">');
          var $fileName = $('<p class="file-name">').text(file.name);
          var $fileSize = $('<span class="file-size">').text(fileSize);
          var $progressWrap = $('<div class="progress_wrap d-none">');
          var $progressBar = $('<div class="progress-bar d-none">');
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
                          .append($('<span>').text('BMP'))
                          .append($('<span>').text('AVIF'))
                          .append($('<span>').text('TIF')))
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
