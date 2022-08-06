@extends('frontend.common.master')
@section('title')
| About Us</title>
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
                        @if($about)
                        <h2>{{ucwords($about->heading)}}</h2>
                        @else
                        <h2 class="text-center">About Us</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{ucwords($about->heading)}}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    @if($about)
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                @if($about->heading)
                <h2>{{ucwords($about->heading)}}</h2>
                @endif

            </div>

            <div class="row gy-4">
                <div class="col-lg-6">

                    @if($about->image)
                    <img src="{{asset('public/images/about/'.$about->image)}}" class="img-fluid rounded-4 mb-4" alt="">
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        @if($about->sub_heading)
                        <h3>{{($about->sub_heading)}}</h3>
                        @endif
                        @if($about->description)
                        <p class="fst-italic">{{ucwords($about->description)}}</p>
                        @endif


                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
    @endif


</main>
@endsection