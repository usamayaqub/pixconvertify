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
                        <div class="converter_item">
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
                                <p class="process-percentage">0%</p>
                            </div>
                            <div class="processing-and-download-and-delete">
                                <button class="processing waves-effect waves-light">Processing</button>
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
                        </div>
                        <div class="converter_item">
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
                                <p class="process-percentage">70%</p>
                            </div>
                            <div class="processing-and-download-and-delete">
                                <button class="processing waves-effect waves-light d-none">Processing</button>
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
                        </div>
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
                                    <span>Convert</span>
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

@endsection
























<!-- JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- MATERIZE SCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./js/main-js.js"></script>
</body>

</html>