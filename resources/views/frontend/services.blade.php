@extends('frontend.common.master')
@section('title')
|Our Services
@endsection
@section('style')
<style>

</style>
@endsection
@section('body')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        @if(!empty(@$servicelimit))
                        <h2>{{@$servicelimit->heading}}</h2>
                        @else
                        <h2>Our Services</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{ucwords($servicelimit->heading)}}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    @if(@$services)
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                @if(!empty(@$servicelimit))
                <h2>{{@$servicelimit->heading}}</h2>
                @else
                <h2>Our Services</h2>
                @endif

            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        @if($service->smallimage)
                        <img src="{{asset('public/images/service/'.$service->smallimage)}}"
                            style="width:100%; margin-bottom: 15px;" />

                        @endif
                        @if($service->title)<h3>{{ucfirst($service->title)}}</h3>@endif
                        <p>{{$service->description}}</p>
                    </div>
                </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>

    </section><!-- End Our Services Section -->

    @endif
    @endsection