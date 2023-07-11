$(document).ready(function(){
    $('.tabs').tabs();
});


// RESPONSIVENESS JS
var arr=[];
function datasubmit(event){
    // event.preventDefault();
    var iframe_large_screen = document.getElementById('iframe_large_screen');
    var iframe_laptop_screen = document.getElementById('iframe_laptop_screen');
    var iframe_tablet_screen = document.getElementById('iframe_tablet_screen');
    var iframe_mobile_screen = document.getElementById('iframe_mobile_screen');
    var site_url_input_field = document.getElementById("site-url-input-field").value;
    var obj={
        site_url_input_field,
    };
    // arr.push(obj);
    arr[0]=obj;
    var inputnew=localStorage.setItem("url", JSON.stringify(arr))
    var mydata = JSON.parse (localStorage.getItem("url"))
    var iframeUrl =mydata[0].site_url_input_field
    console.log("URL" , iframeUrl) ;
    iframe_large_screen.src= iframeUrl;
    iframe_laptop_screen.src=iframeUrl;
    iframe_tablet_screen.src=iframeUrl;
    iframe_mobile_screen.src=iframeUrl;
}


// Convert from
$(document).ready(function() {
    $(".converter-selection_box .convert-from").click(function() {
      var currentDropdown = $(this).siblings(".selection-dropdown");
      $(".selection-dropdown").not(currentDropdown).removeClass("open");
      currentDropdown.toggleClass("open");
    });
  
    $(".format_wrap span").click(function() {
      var selectedValue = $(this).text();
      $(this).closest(".converter-selection_box").find(".convert-from span").text(selectedValue);
      $(".selection-dropdown").removeClass("open");
    });
  
    $(document).click(function(event) {
      var target = $(event.target);
      if (!target.closest(".converter-selection_box").length) {
        $(".selection-dropdown").removeClass("open");
      }
    });
});

// convert to

$(document).ready(function() {
    $(".converter-selection_box .convert-to").click(function() {
      if ($('#selectedConvertTo').hasClass('disabled-dropdown')) {
        e.stopPropagation();
        return false;
      }
      var currentDropdown = $(this).siblings(".selection-dropdown");
      $(".selection-dropdown").not(currentDropdown).removeClass("open");
      currentDropdown.toggleClass("open");
    });
  
    $(".format_wrap span").click(function() {
      var selectedValue = $(this).text();
      $(this).closest(".converter-selection_box").find(".convert-to span").text(selectedValue);
      $(".selection-dropdown").removeClass("open");
    });
  
    $(document).click(function(event) {
      var target = $(event.target);
      if (!target.closest(".converter-selection_box").length) {
        $(".selection-dropdown").removeClass("open");
      }
    });
});



$(document).ready(function() {
    // Handle tab navigation click
    $('.tabz .tab-nav li').click(function() {
      // Remove active class from all tabz
      $('.tabz .tab-nav li').removeClass('active');
      $('.tabz .tab-pane').removeClass('active');
  
      // Add active class to the clicked tab
      $(this).addClass('active');
  
      // Show the corresponding tab content
      var index = $(this).index();
      $('.tabz .tab-pane').eq(index).addClass('active');
    });
  });
  

  
  
  


$(document).ready(function () {
    $('.site-menu').click(function(){
        $('.sidebar').toggleClass('appear');
        $('.sidebar_overlay').show();
        $('body').css('position', 'fixed');
    })
    $('.sidebar_overlay').click(function () {
        $('.sidebar').removeClass('appear');
        $(this).hide();
        $('body').css('position', 'unset');
    })
})

// 
// $(document).ready(function() {
//   // Handle file selection
//   $('input[type=file]').change(function(e) {
//     handleFiles(e.target.files);
//   });

//   // Handle file drag and drop
//   $('.converter_section').on('dragover', function(e) {
//     e.preventDefault();
//     $(this).addClass('dragover');
//   });

//   $('.converter_section').on('dragleave', function(e) {
//     e.preventDefault();
//     $(this).removeClass('dragover');
//   });

//   $('.converter_section').on('drop', function(e) {
//     e.preventDefault();
//     $(this).removeClass('dragover');
//     handleFiles(e.originalEvent.dataTransfer.files);
//   });

//   function handleFiles(files) {
//     for (var i = 0; i < files.length; i++) {
//       var file = files[i];
//       var fileSize = (file.size / 1024).toFixed(2) + ' KB';
//       var reader = new FileReader();

//       reader.onload = (function(file) {
//         return function(e) {
//           var $item = $('<div class="converter_item">');
//           var $itemContent = $('<div class="converter_item_name_size">');
//           var $img = $('<img class="defualt-img" alt="">');
//           var $fileName = $('<p class="file-name">').text(file.name);
//           var $fileSize = $('<span class="file-size">').text(fileSize);

//           $img.attr('src', './assets/images/defualt-img-icon.svg');
//           $itemContent.append($img).append($('<div>').append($fileName).append($fileSize));
//           $item.append($itemContent);

//           // Append the new converter item
//           $('.converter_section_listing .file-item-list').append($item);
//           $('.converter_section_bottom').show();
//         };
//       })(file);

//       reader.readAsDataURL(file);
//     }
//   }
// });

