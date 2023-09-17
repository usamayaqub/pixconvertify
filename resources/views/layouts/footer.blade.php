<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="site-footer_wrap">
            <div class="site-footer_left">
                <div class="footer-site-logo">
                    <img src="{{asset('assets/images/Pixconvertify.svg')}}" class="" alt="Pixconvertify">
                </div>
            </div>
            <div class="site-footer_right">
                <div class="site-footer_right_links left">
                    <p class="links_title">Images Conversation</p>
                    <div class="links_wrap">
                        <ul>
                            <li><a href="{{ route('base', ['format' => 'png-to-webp']) }}">PNG to WEBP</a></li>
                            <li><a href="{{ route('base', ['format' => 'jpeg-to-docx']) }}">JPEG to DOCX</a></li>
                            <li><a href="{{ route('base', ['format' => 'jpg-to-webp']) }}">JPG to WEBP</a></li>
                            <li><a href="{{ route('base', ['format' => 'docx-to-pdf']) }}">DOCX to PDF</a></li>
                            <li><a href="{{ route('base', ['format' => 'png-to-pdf']) }}">PNG to PDF</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('base', ['format' => 'png-to-gif']) }}">PNG to GIF</a></li>
                            <li><a href="{{ route('base', ['format' => 'png-to-gif']) }}">JPEG to GIF</a></li>
                            <li><a href="{{ route('base', ['format' => 'jpg-to-gif']) }}">JPG to GIF</a></li>
                            <li><a href="{{ route('base', ['format' => 'webp-to-gif']) }}">WEBP to GIF</a></li>
                            <li><a href="{{ route('base', ['format' => 'gif-to-pdf']) }}">GIF to PDF</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('base', ['format' => 'webp-to-png']) }}">WEBP to PNG</a></li>
                            <li><a href="{{ route('base', ['format' => 'webp-to-jpg']) }}">WEBP to JPG</a></li>
                            <li><a href="{{ route('base', ['format' => 'webp-to-jpeg']) }}">WEBP to JPEG</a></li>
                            <li><a href="{{ route('base', ['format' => 'webp-to-pdf']) }}">WEBP to PDF</a></li>
                            <li><a href="{{ route('base', ['format' => 'gif-to-webp']) }}">GIF to WEBP</a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-footer_right_links right">
                    <p class="links_title">Quick Links</p>
                    <div class="links_wrap">
                        <ul>
                            <li><a href="{{route('get-how-works')}}">How its Work</a></li>
                            <li><a href="{{route('get-blogs')}}">Blogs</a></li>
                            <li><a href="{{route('get-privacy-policies')}}">Privacy Policy</a></li>
                            <li><a href="{{route('get-contact')}}">Contact Us</a></li>
                            <li><a href="{{route('get-justcompress')}}">Compress Image</a></li>
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


