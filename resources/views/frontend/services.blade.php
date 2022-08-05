@extends('frontend.common.master')
@section('title')
<title> Epiccorporations | Services </title>
 
@section('style')
<style>
.services-section {
    height: 100%;
    text-align: center;
    background: #fff;
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
            <h1 class="text-center">Services</h1>
           
          </div>
        </header>

     <section class="text-center services  aos-init aos-animate"   data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <div class="container">
         <div class="col-lg-12">
            <h1>Services Section</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
           <div class="card baseBlock">
              <span class="fa fa-users"></span>
            <h2>Section 1</h2>
            <p class="lead px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
           </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
           <div class="card baseBlock">
              <span class="fa fa-info"></span>
            <h2>Section 2 </h2>
            <p class="lead px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
           </div>
          </div>
          <div class="clearfix visible-md-block visible-sm-block"></div>
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
            <div class="card baseBlock">
            <span class="fa fa-file"></span>
            <h2>Section 3</h2>
            <p class="lead px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
@endsection