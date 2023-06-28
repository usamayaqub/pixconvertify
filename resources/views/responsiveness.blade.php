<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./convertify-style/variables.css">
  <link rel="stylesheet" href="./convertify-style/main-style.css">
  <link rel="stylesheet" href="./convertify-style/responsivness.css">
  <title>Convertify Compress</title>
</head>

<body>
  <!-- Header -->
  <header class="site-header" id="site-header">
    <nav>
      <div class="site-header_inner-wrap">
        <div class="site-header_link-wrap">
          <a href="#" class="site_logo">
            <img src="./assets/images/site-logo.svg" alt="">
          </a>
          <ul class="site-header-links">
            <li>
              <a href="#">Compress files</a>
            </li>
            <li>
              <a href="#">Check Responsiveness</a>
            </li>
            <li>
              <a href="#">Support</a>
            </li>
          </ul>
        </div>
        <ul class="site-header-signup">
          <li><a class="theme-btn site_login" href="#">Login</a></li>
          <li><a class="theme-btn site_signin waves-effect waves-light" href="#">Sign Up</a></li>
          <img class="site-menu" src="./assets/images/toggle.svg" alt="toggle menu">
        </ul>
      </div>
    </nav>
  </header>
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar_logo">
      <img src="./assets/images/Pixconvertify.svg" alt="">
    </div>
    <div class="sidebar_menu">
      <ul>
        <li><a href="#">Compress files</a></li>
        <li><a href="#">Check Responsiveness</a></li>
        <li><a href="#">Support</a></li>
      </ul>
      <li class="logout">
        <a href="#">
          <img src="./assets/images/sign_out.svg" alt="">
          <span>Logout</span>
        </a>
      </li>
    </div>
  </aside>
  <div class="sidebar_overlay"></div>
  <div class="" id="next">
    <div class="print">
      <div class="p-inner">
        <div class="pp-inner">
        </div>
      </div>
      <div class="b-1">
      </div>
    </div>
    <div>
      <div class="sc-ad6c1f1a-2 LoXwz">
        <div class="wrapper">
          <section class="display">
            <div class="mobile">
              <div class="trim">
                <iframe id="iframe_mobile_screen" src=""></iframe>
              </div>
            </div>
            <div class="tablet">
              <iframe id="iframe_tablet_screen" src=""></iframe>
            </div>
            <div class="laptop">
              <iframe id="iframe_laptop_screen" src=""></iframe>
            </div>
            <div class="desktop">
              <iframe id="iframe_large_screen" src=""></iframe>
            </div>
          </section>
          <div class="col-md-4 mx-auto">
            <div class="search">
              <i class="fa fa-search"></i>
              <input id="input-field" type="url" class="form-control" placeholder="https://bytes.dev"
                pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <button id="basic-addon2" class="btn" onclick="datasubmit()">Go</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="site-footer_wrap">
        <div class="site-footer_left">
          <div class="footer-site-logo">
            <img src="./assets/images/Pixconvertify.svg" class="" alt="">
          </div>
        </div>
        <div class="site-footer_right">
          <div class="site-footer_right_links">
            <p class="links_title">Images Conversation</p>
            <div class="links_wrap">
              <ul>
                <li><a href="#">JPEG to PDF</a></li>
                <li><a href="#">GIF to PNG</a></li>
                <li><a href="#">PNG to TIFF</a></li>
                <li><a href="#">BMP to ICO</a></li>
                <li><a href="#">TIFF to PNG</a></li>
              </ul>
              <ul>
                <li><a href="#">BMP to GIF</a></li>
                <li><a href="#">ICO to PNG</a></li>
                <li><a href="#">WEBP to TIFF</a></li>
                <li><a href="#">PDF to ICO</a></li>
                <li><a href="#">DOC to JPEG</a></li>
              </ul>
            </div>
          </div>
          <div class="site-footer_right_links">
            <p class="links_title">Images Conversation</p>
            <div class="links_wrap">
              <ul>
                <li><a href="#">WORD to PDF</a></li>
                <li><a href="#">PDF to CSV</a></li>
                <li><a href="#">EXCEL to WORD</a></li>
                <li><a href="#">DOC to EXCEL</a></li>
                <li><a href="#">CSV to PDF </a></li>
              </ul>
              <ul>
                <li><a href="#">CSV to WORD</a></li>
                <li><a href="#">DOC to PDF</a></li>
                <li><a href="#">WORD to CSV</a></li>
                <li><a href="#">PDF to EXCEL</a></li>
                <li><a href="#">DOC to WORD</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copywrite">
        <div class="copywrite_left">
          <p>
            Copyright © 2023, Pixconvertify. All Rights Reserved.
          </p>
        </div>
        <div class="copywrite_right">
          <a href="#">Privacy Policy | Term of use</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- JQUERY CDN -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <!-- MATERIZE SCRIPT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="./js/main-js.js"></script>
</body>

</html>