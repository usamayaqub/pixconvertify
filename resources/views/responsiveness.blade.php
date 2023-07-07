@extends('layouts.master')

@section('meta_title', 'Check Responsiveness')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')

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

@endsection