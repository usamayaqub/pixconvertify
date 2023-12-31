$(document).ready(function () {
    $(".tabs").tabs();
    $(".dropdown-trigger").dropdown();
});

// RESPONSIVENESS JS
$(document).ready(function () {
    // Function to check if the URL input field is empty
    function checkInputField() {
        var site_url_input_field = $("#site-url-input-field").val();
        if (site_url_input_field === "") {
            $("#submit-btn").prop("disabled", true); // Disable the button
            $("#submit-btn").addClass("disabled"); // Add the "disabled" class to change the button color
        } else {
            $("#submit-btn").prop("disabled", false); // Enable the button
            $("#submit-btn").removeClass("disabled"); // Remove the "disabled" class to revert the button color
        }
    }

    // Call the checkInputField function on page load
    checkInputField();

    // Call the checkInputField function whenever the input field value changes
    $("#site-url-input-field").on("input", function () {
        checkInputField();
    });

    $("#submit-btn").click(function (event) {
        event.preventDefault();
        submitForm();
    });

    // Function to clear iframe src attributes
    function clearIframes() {
        $("#iframe_large_screen").attr("src", "");
        $("#iframe_laptop_screen").attr("src", "");
        $("#iframe_tablet_screen").attr("src", "");
        $("#iframe_mobile_screen").attr("src", "");
    }

    // Event listener for changes in the URL input field
    $("#site-url-input-field").on("input", function () {
        checkInputField(); // Check if the input field is empty

        // If the input field is empty, clear the iframes
        if ($(this).val() === "") {
            clearIframes();
        }
    });

    // Function to display an alert when iframe loading fails
    function handleIframeLoadError() {
        var site_url_input_field = $("#site-url-input-field").val();
        var iframe_large_screen = $("#iframe_large_screen");
        var iframe_laptop_screen = $("#iframe_laptop_screen");
        var iframe_tablet_screen = $("#iframe_tablet_screen");
        var iframe_mobile_screen = $("#iframe_mobile_screen");

        // Handle iframe load error for each iframe
        iframe_large_screen.on("load", function () {
            if (!iframe_large_screen[0].contentDocument) {
                // Content cannot be loaded, indicating the website doesn't allow iframing
                $("#iframe-error-modal").modal("open");
                clearIframes(); // Clear iframes to remove any previous content
            }
        });

        iframe_laptop_screen.on("load", function () {
            if (!iframe_laptop_screen[0].contentDocument) {
                // Content cannot be loaded, indicating the website doesn't allow iframing
                $("#iframe-error-modal").modal("open");
                clearIframes(); // Clear iframes to remove any previous content
            }
        });

        iframe_tablet_screen.on("load", function () {
            if (!iframe_tablet_screen[0].contentDocument) {
                // Content cannot be loaded, indicating the website doesn't allow iframing
                $("#iframe-error-modal").modal("open");
                clearIframes(); // Clear iframes to remove any previous content
            }
        });

        iframe_mobile_screen.on("load", function () {
            if (!iframe_mobile_screen[0].contentDocument) {
                // Content cannot be loaded, indicating the website doesn't allow iframing
                $("#iframe-error-modal").modal("open");
                clearIframes(); // Clear iframes to remove any previous content
            }
        });
    }

    // Function to submit the form
    function submitForm() {
        var iframe_large_screen = $("#iframe_large_screen");
        var iframe_laptop_screen = $("#iframe_laptop_screen");
        var iframe_tablet_screen = $("#iframe_tablet_screen");
        var iframe_mobile_screen = $("#iframe_mobile_screen");
        var site_url_input_field = $("#site-url-input-field").val();

        console.log("URL", site_url_input_field);

        // Clear iframes first
        clearIframes();

        // Set the src attribute for each iframe
        iframe_large_screen.attr("src", site_url_input_field);
        iframe_laptop_screen.attr("src", site_url_input_field);
        iframe_tablet_screen.attr("src", site_url_input_field);
        iframe_mobile_screen.attr("src", site_url_input_field);

        // Handle iframe load error for each iframe
        handleIframeLoadError();

        // Scroll to the next section
        var nextSection = $(".responsiveness_container-wrap");
        $("html, body").animate(
            {
                scrollTop: nextSection.offset().top,
            },
            1000
        );
    }
});

// Convert from
$(document).ready(function () {
    $(".converter-selection_box .convert-from").click(function () {
        var currentDropdown = $(this).siblings(".selection-dropdown");
        $(".selection-dropdown").not(currentDropdown).removeClass("open");
        currentDropdown.toggleClass("open");
    });

    $(".format_wrap span").click(function () {
        var selectedValue = $(this).text();
        $(this)
            .closest(".converter-selection_box")
            .find(".convert-from span")
            .text(selectedValue);
        $(".selection-dropdown").removeClass("open");
    });

    $(document).click(function (event) {
        var target = $(event.target);
        if (!target.closest(".converter-selection_box").length) {
            $(".selection-dropdown").removeClass("open");
        }
    });
});

// convert to

$(document).ready(function () {
    $(".converter-selection_box .convert-to").click(function () {
        if ($("#selectedConvertTo").hasClass("disabled-dropdown")) {
            e.stopPropagation();
            return false;
        }
        var currentDropdown = $(this).siblings(".selection-dropdown");
        $(".selection-dropdown").not(currentDropdown).removeClass("open");
        currentDropdown.toggleClass("open");
    });

    $(".format_wrap span").click(function () {
        var selectedValue = $(this).text();
        $(this)
            .closest(".converter-selection_box")
            .find(".convert-to span")
            .text(selectedValue);
        $(".selection-dropdown").removeClass("open");
    });

    $(document).click(function (event) {
        var target = $(event.target);
        if (!target.closest(".converter-selection_box").length) {
            $(".selection-dropdown").removeClass("open");
        }
    });
});

$(document).ready(function () {
    // Handle tab navigation click
    $(".tabz .tab-nav li").click(function () {
        // Remove active class from all tabz
        $(".tabz .tab-nav li").removeClass("active");
        $(".tabz .tab-pane").removeClass("active");

        // Add active class to the clicked tab
        $(this).addClass("active");

        // Show the corresponding tab content
        var index = $(this).index();
        $(".tabz .tab-pane").eq(index).addClass("active");
    });
});

$(document).ready(function () {
    $(".site-menu").click(function () {
        $(".sidebar").toggleClass("appear");
        $(".sidebar_overlay").show();
        $("body").addClass("fixed");
    });
    $(".sidebar_overlay").click(function () {
        $(".sidebar").removeClass("appear");
        $(this).hide();
        $("body").removeClass("fixed");
    });
});
$(document).ready(function () {
    $(".sidenav").sidenav();
});

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

// $(".carousel.carousel-slider").carousel({
//     fullWidth: true,
//     indicators: true,
// });

$(document).ready(function () {
    $(".pormotion-slider").owlCarousel({
        // loop: true,
        margin: 10,
        nav: false,
        dots: false,
        // autoplay:true,
        // autoplayTimeout:5000,
        // autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });
});
