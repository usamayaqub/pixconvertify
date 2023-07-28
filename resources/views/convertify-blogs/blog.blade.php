@extends('layouts.master')

@section('meta_title', 'Blogs | Convertify')
@section('meta_description', '')
@section('canonical',"")

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
                <div class="shape">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
            <div class="site-banner-right">
                <img src="{{asset('./assets/images/blog.svg')}}" class="banner_img" alt="">
                <div class="blur">
                    <img src="{{asset('./assets/images/shape.svg')}}" class="obj_fit_contain" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="blog-wrapper">
  <div class="container">
    <div class="seacrh-bar">
      <input type="search" placeholder="Search Blog Here">
      <img src="{{asset('assets/images/search-icon.svg')}}" alt="">
    </div>
    <h2 class="mb-0 blog-sec-title">All Blogs</h2>
    <div class="blog-card-wrap row">
        <div class="card-item col l4 m6 s12">
          <div class="card-item_img">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
          </div>
          <h3>The Importance of Decluttering Before Moving: Expert Advice from OneMove</h3>
          <div class="short_disc">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi nihil nobis fugiat alias temporibus distinctio voluptatibus unde similique rerum.
            </p>
          </div>
          <div class="card-item-bottom">
            <a href="{{route('get-blogs-detail')}}" class="waves-effect waves-light btn readmore-btn streched-btn">Read More</a>
            <div class="post-time">
              <img src="{{asset('assets/images/clock.svg')}}" alt="">
              <span>1 week ago</span>
            </div>
          </div>
        </div>
        <div class="card-item col l4 m6 s12">
          <div class="card-item_img">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
          </div>
          <h3>The Importance of Decluttering Before Moving: Expert Advice from OneMove</h3>
          <div class="short_disc">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi nihil nobis fugiat alias temporibus distinctio voluptatibus unde similique rerum.
            </p>
          </div>
          <div class="card-item-bottom">
            <a href="#" class="waves-effect waves-light btn readmore-btn streched-btn">Read More</a>
            <div class="post-time">
              <img src="{{asset('assets/images/clock.svg')}}" alt="">
              <span>1 week ago</span>
            </div>
          </div>
        </div>
        <div class="card-item col l4 m6 s12">
          <div class="card-item_img">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
          </div>
          <h3>The Importance of Decluttering Before Moving: Expert Advice from OneMove</h3>
          <div class="short_disc">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi nihil nobis fugiat alias temporibus distinctio voluptatibus unde similique rerum.
            </p>
          </div>
          <div class="card-item-bottom">
            <a href="#" class="waves-effect waves-light btn readmore-btn streched-btn">Read More</a>
            <div class="post-time">
              <img src="{{asset('assets/images/clock.svg')}}" alt="">
              <span>1 week ago</span>
            </div>
          </div>
        </div>
        <div class="card-item col l4 m6 s12">
          <div class="card-item_img">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
          </div>
          <h3>The Importance of Decluttering Before Moving: Expert Advice from OneMove</h3>
          <div class="short_disc">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi nihil nobis fugiat alias temporibus distinctio voluptatibus unde similique rerum.
            </p>
          </div>
          <div class="card-item-bottom">
            <a href="#" class="waves-effect waves-light btn readmore-btn streched-btn">Read More</a>
            <div class="post-time">
              <img src="{{asset('assets/images/clock.svg')}}" alt="">
              <span>1 week ago</span>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection