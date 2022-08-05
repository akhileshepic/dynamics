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
    margin-bottom: 0px !important;
    border-radius: 0px !important;
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

@if(@$services)
<section class="text-center services  aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
    <div class="container">
        <div class="col-lg-12">

            <h1>Services Section</h1>


        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                <div class="card baseBlock">
                    @if($service->smallimage)
                    <img src="{{asset('public/images/service/'.$service->smallimage)}}" />
                    @else
                    <span class="fa fa-users"></span>
                    @endif
                    @if($service->title)<h2>{{ucfirst($service->title)}}</h2>@endif
                    <p class="lead px-2">{{$service->description}}</p>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
@endif
@endsection