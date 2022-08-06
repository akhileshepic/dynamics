@extends('frontend.common.master')
@section('title')
|Our Product
@endsection
@section('style')
<style>
.lft-enquiry>.inner h3 {
    margin: 0 -10px 10px;
    background: #008374;
    color: #fff;
    padding: 5px 10px;
    font-weight: 100;
    font-size: 21px;
}

.lft-enquiry>.inner {
    border: 1px solid #008374;
    padding: 0 10px 10px;
    box-shadow: 0 0 5pxrgba(0, 0, 0, 0.5);
    background: #fff;
}

select {
    background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
    border: medium none;
    font: 100 14px "Open Sans" !important;
    margin: 6px 0 !important;
    padding: 9px 10px;
    width: 100%;
    border: 1px solid #ccc;
}

.lft-enquiry>.inner .btn {
    background: #008374;
}

.lft-enquiry>.inner .btn {
    background: #008374;
    color: #fff;
}
</style>
@endsection
@section('body')
<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Product Details</h2>

                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="assets/img/portfolio/app-1.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/img/portfolio/product-1.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/img/portfolio/branding-1.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/img/portfolio/books-1.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        {!! $product->description !!}

                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 lines">
                    <div class="lft-enquiry">
                        <div class="inner">
                            <h3>Quick Enquiry</h3>
                            <form onsubmit="return validationfrnt2();" method="post" name="from2" id="" action="">
                                <input type="text" name="name" id="name" class="form-control my-1"
                                    placeholder="Your name">
                                <input type="text" name="mobile" id="mobile" class="form-control my-1"
                                    placeholder="Mobile">
                                <input type="text" name="email" id="email" class="form-control my-1"
                                    placeholder="Email id">
                                <select id="category" name="category" onchange="myFunction()">
                                    <option value="- Category -">- Category -</option>
                                    <option value="Gravure">Product 1</option>
                                    <option value="Flexo">Product 2</option>
                                    <option value="Embossing">Product 3</option>
                                    <option value="Coating Roller">Product 4</option>
                                    <option value="Value Added Services">Product 5</option>
                                    <option value="Base Rollers">Product 6</option>
                                </select>
                                <input type="hidden" id="cat1" name="cat1" value="" readonly="readonly">
                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                <button type="submit" id="" name="submit" class="btn mt-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>

@endsection