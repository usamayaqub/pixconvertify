<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="site-footer_wrap">
            <div class="site-footer_left">
                <div class="footer-site-logo">
                    <img src="{{asset('assets/images/Pixconvertify.svg')}}" class="" alt="">
                </div>
            </div>
            <div class="site-footer_right">
                <div class="site-footer_right_links">
                    <p class="links_title">Images Conversation</p>
                    <div class="links_wrap">
                        <ul>
                            <li><a href="{{ route('base', ['format' => 'jpeg-to-pdf']) }}">JPEG to PDF</a></li>
                            <li><a href="{{ route('base', ['format' => 'gif-to-png']) }}">GIF to PNG</a></li>
                            <li><a href="{{ route('base', ['format' => 'png-to-tiff']) }}">PNG to TIFF</a></li>
                            <li><a href="{{ route('base', ['format' => 'bmp-to-ico']) }}">BMP to ICO</a></li>
                            <li><a href="{{ route('base', ['format' => 'tiff-to-png']) }}">TIFF to PNG</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('base', ['format' => 'bmp-to-gif']) }}">BMP to GIF</a></li>
                            <li><a href="{{ route('base', ['format' => 'ico-to-png']) }}">ICO to PNG</a></li>
                            <li><a href="{{ route('base', ['format' => 'webp-to-tiff']) }}">WEBP to TIFF</a></li>
                            <li><a href="{{ route('base', ['format' => 'jpeg-to-webp']) }}">JPEG to WEBP</a></li>
                            <li><a href="{{ route('base', ['format' => 'png-to-webp']) }}">PNG to WEBP</a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-footer_right_links">
                    <p class="links_title">Quick Links</p>
                    <div class="links_wrap">
                        <ul>
                            <li><a href="{{route('get-how-works')}}">How its Work</a></li>
                            <li><a href="{{route('get-blogs')}}">Blogs</a></li>
                            <li><a href="{{route('get-privacy-policies')}}">Privacy Policy</a></li>
                            <li><a href="{{route('get-contact')}}">Contact Us</a></li>
                            <li><a href="{{route('get-support')}}">Buy us Coffee</a></li>
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
                <a href="{{route('get-term')}}">Privacy Policy | Term of use</a>
            </div>
        </div>
    </div>
</footer>