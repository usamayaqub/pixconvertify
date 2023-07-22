@extends('layouts.master')

@section('meta_title', 'compress')
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
                        <p>Compress your file</p>
                    </div>
                    <h1>
                        Free online file
                        <span>compresser</span>
                    </h1>
                    <p class="banner-message">
                        Easily Compress Up to 20 files at a single time. Lots of media and document formats are
                        supported.
                    </p>
                    <div class="shape">
                        <img src="./assets/images/shape.svg" class="obj_fit_contain" alt="">
                    </div>
                </div>
                <div class="site-banner-right">
                    <img src="./assets/images/banner-imag.svg" class="banner_img" alt="">
                    <div class="blur">
                        <img src="./assets/images/shape.svg" class="obj_fit_contain" alt="">
                    </div>
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
                            <img src="./assets/images/drop-icon.svg" alt="">
                            <h2 class="drop_file-text mt-0">Drag or Drop file here</h2>
                            <p class="restriction-text">Up to 20 files at a single time, max 20 MB each.</p>
                            <input type="file">
                        </div>
                    </div>
                    <div class="converter_section_right">
                        <div class="converter_section_selection">
                            <button class="select-file waves-effect waves-light">
                                <img src="./assets/images/file-icon.svg" alt="">
                                <span>Select File</span>
                                <input type="file">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="converter_section_listing">
                    <ul>
                        <!-- <div class="converter_item">
                            <div class="converter_item_name_size">
                                <img src="./assets/images/defualt-img-icon.svg" class="defualt-img" alt="">
                                <div>
                                    <p class="file-name">Tech design requirements.jpeg</p>
                                    <span class="file-size">200 KB</span>
                                </div>
                            </div>
                            <div class="progress_wrap">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 0%;"></div>
                                </div>
                                <p class="process-percentage">100%</p>
                            </div>
                            <div class="processing-and-download-and-delete">
                                <button class="processing waves-effect waves-light">DOne</button>
                                <button class="downloading-btn waves-effect waves-light d-none">
                                    <img src="./assets/images/download-arrow.svg" alt="">
                                    <span>
                                        Download File
                                    </span>
                                </button>
                                <button class="delete-button">
                                    <img src="./assets/images/dustbin.svg" alt="">
                                </button>
                                <div class="check-button d-none">
                                    <img src="./assets/images/checkbox-icon.svg" alt="">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="converter_item">
                            <div class="converter_item_name_size">
                                <img src="./assets/images/defualt-img-icon.svg" class="defualt-img" alt="">
                                <div>
                                    <p class="file-name">Tech design requirements.jpeg</p>
                                    <span class="file-size">200 KB</span>
                                </div>
                            </div>
                            <div class="progress_wrap">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 70%;"></div>
                                </div>
                                <p class="process-percentage">100%</p>
                            </div>
                            <div class="processing-and-download-and-delete">
                                <button class="processing waves-effect waves-light d-none">Processed</button>
                                <button class="downloading-btn waves-effect waves-light">
                                    <img src="./assets/images/download-arrow.svg" alt="">
                                    <span>
                                        Download File
                                    </span>
                                </button>
                                <button class="delete-button d-none">
                                    <img src="./assets/images/dustbin.svg" alt="">
                                </button>
                                <div class="check-button">
                                    <img src="./assets/images/checkbox-icon.svg" alt="">
                                </div>
                            </div>
                        </div> -->
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
                                <button class="download-all-files waves-effect waves-light">
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
                    <img src="./assets/images/file.svg" alt="">
                    <h3>Step 1</h3>
                    <p>Select a file from your devices.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="./assets/images/format.svg" class="icons-image" alt="">
                    <h3>Step 2</h3>
                    <p>Choose a destination format.</p>
                </div>
                <div class="how-its-work_item">
                    <img src="./assets/images/download.svg" alt="">
                    <h3>Step 3</h3>
                    <p>Download your converted file immediately.</p>
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
  $('.converter_section').on('dragover', function(e) {
    e.preventDefault();
    $(this).addClass('dragover');
  });

  $('.converter_section').on('dragleave', function(e) {
    e.preventDefault();
    $(this).removeClass('dragover');
  });

  $('.converter_section').on('drop', function(e) {
    e.preventDefault();
    $(this).removeClass('dragover');
    handleFiles(e.originalEvent.dataTransfer.files);
  });

  // Convert image on button click
  $('.convert-file').click(function() {
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

        $img.attr('src','./assets/images/defualt-img-icon.svg');
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
