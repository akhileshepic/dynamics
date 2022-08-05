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
          <h1 class="text-center">About Us</h1>
         
        </div>
      </header>
 <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="" data-aos="fade-right" data-aos-duration="1500">
                     <h3 class="card-title py-3">What is Lorem Ipsum?</h3>
                     <p class="text-justify px-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>

                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>

                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                     </p>
                   </div>
   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-duration="1500">
                  <div class="align-items-center py-1">
                    <img src="{{asset('public/frontend/images/about.png')}}" width="100%">
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection