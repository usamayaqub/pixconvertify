@extends('layouts.master')

@section('meta_title', 'PixConvertify Blog | Expert Tips and Insights on Picture Conversion')
@section('meta_description', 'Explore the PixConvertify blog for expert tips, and insights on picture conversion. Stay updated with the latest trends and techniques to optimize your images and make the most out of our conversion services. Our blog is your go-to resource for enhancing your visual content and unleashing the full potential of your pictures. Join the conversation and transform your images today')
@section('canonical',"https://pixconvertify.com/blogs")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<!-- BANNER SECTION -->
<section class="site-banner blog-banner">
    <div class="site-banner_container">
        <div class="site-banner-wrap">
            <div class="site-banner-left">
                <div class="banner-badge">
                    <p>PixConvertify Blogs</p>
                </div>
                <h1>
                    Our Latest 
                  <span>Blogs</span>
                </h1>
                <p class="banner-message">
                    Discover More Insights Dive Deeper into Our Informative Blog Articles
                </p>
            </div>
            <div class="site-banner-right">
                <img src="{{asset('./assets/images/blog.svg')}}" class="banner_img" alt="">
            </div>
        </div>
    </div>
</section>
<div class="blog-wrapper">
  <div class="container">
    <div class="seacrh-bar">
    <form action="{{ route('get-blogs') }}" method="GET" class="flex gap-2">
      <input type="search" placeholder="Search Blog Here" name="search" value="{{ $searchTerm }}" onkeydown="if(event.keyCode === 13) this.form.submit()">
    </form>
      <img src="{{asset('assets/images/search-icon.svg')}}" alt="">
    </div>
    <h2 class="mb-0 blog-sec-title">All Blogs</h2>
    <div class="blog-card-wrap row">
        @if ($blogs->isEmpty())
            <P class="no_result_found">No Results Found</P>
        @endif
        @foreach($blogs as $blog)
        <div class="card-item col l4 m6 s12">          
          <div class="card-item_img">
          @if(isset($blog->images->first()->url))
            <img src="{{$blog->images->first()->url}}" alt="">
            @endif
          </div>
          <h3>{{$blog->title}}</h3>
          <div class="short_disc">
            <p>
            {!! Str::limit($blog->content, 200) !!}
            </p>
          </div>
          <div class="card-item-bottom">
            <a href="{{route('get-blogs-detail',$blog->slug)}}" class="waves-effect waves-light btn readmore-btn streched-btn">Read More</a>
            <div class="post-time">
              <img src="{{asset('assets/images/clock.svg')}}" alt="">
              <span>{{$blog->created_at->diffforhumans()}}</span>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</div>

@if ($blogs->lastPage() > 1)
    <ul class="pagination pb-[3rem]">
        @if ($blogs->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $blogs->previousPageUrl() }}" class="page-link">&laquo;</a>
            </li>
        @endif

        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
            @if ($i == $blogs->currentPage())
                <li class="page-item active">
                    <span class="page-link">{{ $i }}</span>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endif
        @endfor

        @if ($blogs->hasMorePages())
            <li class="page-item">
                <a href="{{ $blogs->nextPageUrl() }}" class="page-link">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">&raquo;</span>
            </li>
        @endif
    </ul>
@endif

@endsection