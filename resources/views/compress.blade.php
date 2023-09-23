@extends('layouts.master')

@section('meta_title', 'Image Compression | Compress PNG, WebP, JPEG, JPG, GIF | PixConvertify')
@section('meta_description', 'Compress your images effortlessly at PixConvertify! Reduce file sizes of PNG, WebP, JPEG, JPG, and GIF images without compromising quality. Optimize your visual content for faster loading times and improved web performance. Try our user-friendly image compression tools and enjoy smaller, lighter, and faster images. Enhance your website or projects today!')
@section('canonical',"https://pixconvertify.com/compress")

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
                        <p>Compress your file</p>
                    </div>
                    <h1>
                        Free Online Image
                        <span>Compresser</span>
                    </h1>
                    <p class="banner-message">
                        Looking for free online image compress online? With our user-friendly tool, you can easily optimize up to 40 files at once.
                    </p>
                </div>
                <div class="site-banner-right">
                    <img src="{{asset('./assets/images/banner-imag.svg')}}" class="banner_img" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- CONVERTER SECTION -->
    <section class="converter_section compresser">
        <div class="container">
            <div class="converter_section_wrap">
                <div class="converter_section_wrap_selection">
                    <div class="converter_section_left">
                        <div class="converter_dropbox">
                            <img src="{{asset('./assets/images/drop-icon.svg')}}" alt="">
                            <h2 class="drop_file-text mt-0">Drag or Drop file here</h2>
                            <p class="restriction-text">Compress up to 40 images at a single time, max 20 MB each.</p>
                            <input type="file" title="">
                        </div>
                    </div>
                    <div class="converter_section_right">
                        <div class="converter_section_selection">
                            <button class="select-file waves-effect waves-light">
                                <img src="./assets/images/file-icon.svg" alt="">
                                <span>Select File</span>
                                <input type="file" title="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="converter_section_listing">
                    <ul>
                    </ul>
                    <div class="converter_section_bottom">
                        <div class="converter_section_inner">
                            <button class="add-more-file select-file waves-effect waves-light ml-0">
                                <img src="./assets/images/file-icon.svg" alt="">
                                <span>Add More File</span>
                                <input type="file">
                            </button>
                            <div class="">
                                <button class="convert-file waves-effect waves-light">
                                    <img src="./assets/images/convert-icon.svg" alt="">
                                    <span>Compress</span>
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



    <section class="section-convertion-and-format">
      <div class="container">
        <h2 class="h1 center mb-5">Compressing <span class="theme-color">PNG</span>, <span class="theme-color">JPG</span>, <span class="theme-color">WebP</span> and <span class="theme-color">GIF</span></h2>

        <div class="flex-wrap align-items-start">
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md">Shrink Images Online for Easy Storage</h3>
                  <p class="content-p">
                    Do you find your image files taking up way too much space on your device? No worries! You can easily shrink images online using our convenient tool. Whether you're managing a website, sharing pictures on social media, or just trying to save storage, we've got you covered.
                    
                    With our user-friendly platform, you can quickly and effortlessly compress your images. Plus, you can process up to 40 images at once, making it a breeze to optimize your visual content. So, if you're tired of bulky image files eating up your storage, give our Shrink Images Online tool a try today. Streamline your images and free up space effortlessly!
                    
                    So, if you're tired of bulky image files eating up your storage, give our Shrink Images Online tool a try today. Streamline your images and free up space effortlessly!
                  <p>
                </div>
                <img src="{{asset('./assets/images/shrink.svg')}}" alt="Shrink Images Online">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
              <h3 class="heading-md">The Benefits of Online Picture Compression in Web Design</h3>
                <p class="content-p">
                  In the ever-evolving field of web design, where speed and performance are key, online picture compression proves to be a valuable tool. It's not just about making your website look polished; it's about making your site work better.
                  Online picture compression simplifies the process of reducing the file size of your images, which, in turn, ensures that your web pages load swiftly. This significantly improves the user experience, especially for those accessing your site on mobile devices.
                  Moreover, online picture compression helps you save on bandwidth, which can be quite helpful if you're working within budget constraints or expecting heavy website traffic.
                  In the world of web design, remember this simple truth Embrace online picture compression for a faster, more efficient, and budget-friendly website.
                <p>
              </div>
                <img src="{{asset('./assets/images/layer-ui-web.svg')}}" alt="Online Picture Compression">
              </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                  <h3 class="heading-md"><b>Optimizing Load Times</b> The Significance of Compressing Online Images</h3>
                  <p class="content-p">
                    When it comes to speeding up your website, think about image compression as your secret weapon. By compressing images online, you're not just making them smaller; you're making your web pages load faster.

                    When visitors come to your site, and because you decided to compress online images, your pages load quickly. No more frustrating waiting times; it's nearly instant.

                    By using simple methods to compress online images, you're not only improving the user experience but also saving valuable bandwidth. Whether you have a portfolio or an online store, this approach ensures that your web content is easily accessible to more people without sacrificing quality.

                    So, if you want to maximize page load speed, keep this in mind compress online images is the key to a faster, smoother online experience. Compress an image now and reduce size while preserving quality and resolution
                  <p>
              </div>
                <img src="{{asset('./assets/images/setting.svg')}}" alt="compress online images">
            </div>
          </div>
          <div class="flex-50">
            <div class="flex-inner">              
              <div>
                <h3 class="heading-md">Simplifying Your Website Online Compress Size of Image Explained</h3>
                  <p class="content-p">
                    When it comes to boosting your website's performance, understanding the online compress size of image process is like having a friendly conversation. By applying online compress size of image techniques, you're ensuring your website loads swiftly and efficiently.

                    Your website, optimized with online compress size of image methods, welcomes visitors with lightning-fast page loading. Waiting around is a thing of the past, thanks to efficient image compression.

                    Incorporating the practice of online compress size of image is a wise choice. It not only enhances user experience but also conserves valuable bandwidth. Whether you're running a blog or an e-commerce site, it's a win-win situation – your website remains accessible and performs at its peak.

                    So, keep in mind the key phrase online compress size of image to keep your website running efficiently and user-friendly.      
                  <p>
              </div>
                  <img src="{{asset('./assets/images/speed.svg')}}" alt="Online Compress Size of Image">
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
                    <img src="./assets/images/file.svg" alt="">
                    <h3>Step 1</h3>
                    <p>Select a file from your devices.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="./assets/images/format.svg" class="icons-image" alt="">
                    <h3>Step 2</h3>
                    <p>Click on the Compress button.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="./assets/images/download.svg" alt="">
                    <h3>Step 3</h3>
                    <p>Download your compressed file immediately.</p>
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

  // Handle file selection
  $('input[type=file]').change(function(e) {
     var selectedFormat = $('#selectedConvertTo').text();

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
            text: 'You can only compress 10 images at a time.',
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
    return;
  }
    var selectedFormat = $('.selectedConvertFrom').text();
    convertImages(files);

  });

  // Download all converted images as a zip file
  $('.download-all-files').click(function() {
    if (convertedFiles.length > 0) {
      downloadAsZip(convertedFiles);
    }
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


    var reader = new FileReader();

    reader.onload = (function(file) {
      return function(e) {
        var $item = $('<div class="converter_item">');
        var $itemContent = $('<div class="converter_item_name_size">');
        var $img = $('<img class="defualt-img" alt="">');
        var $fileName = $('<p class="file-name">').text(file.name);
        var $fileSize = $('<span class="file-size">'); // Create a span for file size

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

        $img.attr('src', './assets/images/defualt-img-icon.svg');
        $itemContent.append($img).append($('<div>').append($fileName).append($fileSize));
        $progressBar.append($progress);
        $progressWrap.append($progressBar).append($processPercentage);
        $item.append($itemContent).append($progressWrap).append($('<div class="processing-and-download-and-delete">').append($processingBtn).append($downloadBtn).append($deleteBtn).append($checkBtn));

        // Append the new converter item
        $('.converter_section_listing ul').append($item);
        $('.converter_section_bottom').show();

        $deleteBtn.on('click', function() {
          var index = $('.delete-button').index(this);
          files.splice(index, 1);
          $(this).closest('.converter_item').remove();
        });
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

  var successfulConversions = 0; 
//   var format = $('#selectedConvertTo').text(); // Get the selected format
  $.each(files, function(index, file) {


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
      url: '/api/compress-image', // Replace with the actual URL for your Laravel route
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
        if (index === files.length - 1) {
          $('.delete-button').removeAttr('disabled');
          if (successfulConversions === files.length) {
            // If all files have been successfully converted
            $('.download-all-files').removeClass('d-none'); // Show the "Download All" button
          }
        }
        updateConvertButtonState();
        conversionInProgress = false;
        files = [];
        $('.download-all-files').removeClass('d-none');

      }
    });
  });
}


function updateConvertButtonState() {
    if (files.length > 0) {
      $('.convert-file').removeAttr('disabled'); // Enable convert button
    } else {
      $('.convert-file').attr('disabled', 'disabled'); // Disable convert button
    }
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
