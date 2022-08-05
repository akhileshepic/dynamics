@extends('frontend.common.master')
@section('title')
<title>Schools | Home</title>
@endsection
@section('style')
<style>
    .about-section {
    height: 100%;
    text-align: center;
    background: #eee;
}
header.jumbotron {
  background-image: url('{{asset('public/frontend/images/services.png')}}');
  background-size: cover;
  margin-bottom: 0px!important;
}

  </style>
@endsection
 @section('body')
  <!-- Slider -->
  <header class="jumbotron">
        <div class="container">
        @if($about)
        <h1 class="text-center">{{ucwords($about->heading)}}</h1>
        @else
          <h1 class="text-center">About Us</h1>
        @endif 
        </div>
      </header>
      @if($about)
 <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  @if($about->heading)
                    <h1>{{ucwords($about->heading)}}</h1>
                  @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="" data-aos="fade-right" data-aos-duration="1500">
                   @if($about->sub_heading)
                     <h3 class="card-title py-3">{{ucwords($about->sub_heading)}}</h3>
                     @endif
                     @if($about->description)
                     <p class="text-justify px-3">{{ucwords($about->description)}}</p>
                     @endif
                   </div>
   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-duration="1500">
                  <div class="align-items-center py-1">
                    <img src="{{asset('public/images/about/'.$about->image)}}" width="100%">
                  </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection