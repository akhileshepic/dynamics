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

.services-section {
    height: 100%;
    text-align: center;
    background: #fff;
}

.contact-section {
    height: 100%;
    background: #eee;
}
</style>
@endsection
@section('body')
@if($sliders)
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @php
        $j=1;
        @endphp
        @foreach($sliders as $key=>$sliderin)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$j++}}" class="@if($j++=='1') active @endif ">
        </li>

        @endforeach
    </ol>
    <div class="carousel-inner">
        @php
        $i=1;
        @endphp
        @foreach($sliders as $key=>$slider)

        <div class="carousel-item @if($i++=='1') active @endif ">
            <img class="d-block w-100" src="{{asset('public/images/slider/'.$slider->image)}}" alt="{{$slider->head }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$slider->head}}</h5>
                <p>{{$slider->description}}</p>
            </div>
        </div>
        @endforeach


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endif
<!-- About Section -->
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
<!-- Services Section -->

@if(@$services)
<section class="text-center services  aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
    <div class="container">
        <div class="col-lg-12">
            @if(!empty(@$servicelimit))
            <h1>{{@$servicelimit->heading}}</h1>
            @else
            <h1>Services Section</h1>
            @endif

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
<!-- Contact Section -->
<section id="contact" class="contact-section aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Contact Us</h1>
            </div>
            <div class="contain">

                <div class="wrapper">

                    <div class="form">
                        <h4>GET IN TOUCH</h4>
                        <h2 class="form-headline">Send us a message</h2>
                        <form id="submit-form" action="">
                            <p>
                                <input id="name" class="form-input" type="text" placeholder="Your Name*">
                                <small class="name-error"></small>
                            </p>
                            <p>
                                <input id="email" class="form-input" type="email" placeholder="Your Email*">
                                <small class="name-error"></small>
                            </p>
                            <p class="full-width">
                                <input id="company-name" class="form-input" type="text" placeholder="Company Name*"
                                    required>
                                <small></small>
                            </p>
                            <p class="full-width">
                                <textarea minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*"
                                    required></textarea>
                                <small></small>
                            </p>
                            <p class="full-width">
                                <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to
                                receive communications by call / email about Company's services.
                            </p>
                            <p class="full-width">
                                <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">

                            </p>
                        </form>
                    </div>

                    <div class="contacts contact-wrapper">

                        <ul>
                            <li>
                                <p class="text-justify"><span><i class="fas fa-map-marker-alt socials"></i></span>
                                    Apolis Building,Plot no 736, LGF <br>Udyog Vihar Phase V ,Sector 19,<br> Gurugram,
                                    Haryana 122008 (India)</p>
                            </li>
                            <span class="hightlight-contact-info">
                                <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com
                                </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text"><a
                                            href="tel:9643824343" style="color:#212D31;">+91 9643-82-4343</a></span>
                                </li>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection