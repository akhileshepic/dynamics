   @extends('frontend.common.master')
   @section('title')
   | Home

   @endsection
   @section('style')
   <style>
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: 100vh;
    background-color: rgba(63, 73, 83, 0.8);
    overflow: hidden;
    position: relative;
}

#hero .carousel,
#hero .carousel-inner,
#hero .carousel-item,
#hero .carousel-item::before {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
}

#hero .carousel-item {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

#hero .carousel-item::before {
    content: "";
    background-color: rgba(30, 35, 40, 0.6);
}

#hero .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 70px;
    left: 50px;
    right: 50px;
}

#hero .container {
    text-align: center;
}

#hero h2 {
    color: #fff;
    margin-bottom: 20px;
    font-size: 48px;
    font-weight: 700;
}

#hero p {
    -webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
    margin: 0 auto 30px auto;
    color: #fff;
}

#hero .carousel-inner .carousel-item {
    transition-property: opacity;
    background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
    opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
    opacity: 1;
    transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
    left: 0;
    transform: translate3d(0, 0, 0);
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
    background: none;
    font-size: 30px;
    line-height: 0;
    width: auto;
    height: auto;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    transition: 0.3s;
    color: rgba(255, 255, 255, 0.5);
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
    background: rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
    cursor: pointer;
    background: #fff;
    overflow: hidden;
    border: 0;
    width: 12px;
    height: 12px;
    border-radius: 50px;
    opacity: 0.6;
    transition: 0.3s;
}

#hero .carousel-indicators li.active {
    opacity: 1;
    background: #d9232d;
}

#hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 14px 32px;
    border-radius: 4px;
    transition: 0.5s;
    line-height: 1;
    color: #fff;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    background: #d9232d;
}

#hero .btn-get-started:hover {
    background: #df3740;
}

@media (max-width: 992px) {
    #hero {
        height: 100vh;
    }

    #hero .carousel-container {
        top: 8px;
    }
}

@media (max-width: 768px) {
    #hero h2 {
        font-size: 28px;
    }
}

@media (min-width: 1024px) {

    #hero .carousel-control-prev,
    #hero .carousel-control-next {
        width: 5%;
    }
}

@media (max-height: 500px) {
    #hero {
        height: 120vh;
    }
}
   </style>
   @endsection
   @section('body')
   @if($sliders)
   <section id="hero">
       <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

           <ol class="carousel-indicators" id="hero-carousel-indicators">
               @php
               $j=0;
               @endphp
               @foreach($sliders as $key=>$sliderin)
               <li data-bs-target="#heroCarousel" data-bs-slide-to="{{$j}}" class="@if($j=='0') active @endif"
                   <?php if ($j == '0') { ?> aria-current="true" <?php } ?>></li>
               @php $j++; @endphp
               @endforeach
           </ol>

           <div class="carousel-inner" role="listbox">
               @php
               $i=0;
               @endphp
               @foreach($sliders as $key=>$slider)
               <!-- Slide 1 -->
               <div class="carousel-item @if($i=='0') active @endif "
                   style="background-image: url({{asset('public/images/slider/'.$slider->image)}})">
                   <div class="carousel-container">
                       <div class="container">
                           <h2 class="animate__animated animate__fadeInDown">{{ucwords($slider->head)}}</h2>
                           <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p>

                       </div>
                   </div>
               </div>
               @php $i++; @endphp
               @endforeach

           </div>

           <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
               <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
           </a>

           <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
               <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
           </a>

       </div>

   </section>
   @endif
   <!-- End Hero Section -->

   <main id="main">

       <!-- ======= About Us Section ======= -->
       <!-- About Section -->
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
                       <img src="{{asset('public/images/about/'.$about->image)}}" class="img-fluid rounded-4 mb-4"
                           alt="">
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


       <!-- ======= Stats Counter Section ======= -->
       @if(@$Clients)
       <section id="stats-counter" class="stats-counter">
           <div class="container" data-aos="fade-up">

               <div class="row gy-4 align-items-center">

                   <div class="col-lg-6">
                       <img src="{{asset('public/frontend/assets/img/stats-img.svg')}}" alt="" class="img-fluid">
                   </div>

                   <div class="col-lg-6">

                       <div class="stats-item d-flex align-items-center">
                           <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                               class="purecounter"></span>
                           <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                       </div>

                       <div class="stats-item d-flex align-items-center">
                           <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                               class="purecounter"></span>
                           <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                       </div>

                       <div class="stats-item d-flex align-items-center">
                           <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                               class="purecounter"></span>
                           <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                       </div>

                   </div>

               </div>

           </div>
       </section><!-- End Stats Counter Section -->
       @endif
       <!-- ======= Our Services Section ======= -->
       @if(@$services)
       <section id="services" class="services sections-bg">
           <div class="container" data-aos="fade-up">
               <div class="section-header">
                   @if(!empty(@$servicelimit))
                   <h2>{{@$servicelimit->heading}}</h2>
                   @else
                   <h2>Our Services</h2>
                   @endif

               </div>
               @if(!empty(@$servicelimit))

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

               @endif
           </div>
           <div class="text-center pt-5"><a href="{{URL::to('/service')}}"
                   style="background: var(--color-primary);border: 0;padding: 14px 45px;color: #fff;transition: 0.4s;border-radius: 50px;">View
                   more <i class="bi bi-arrow-right"></i></a></div>
       </section><!-- End Our Services Section -->

       @endif
       <!-- ======= Portfolio Section ======= -->
       <section id="portfolio" class="portfolio sections-bg">
           <div class="container" data-aos="fade-up">

               <div class="section-header">
                   <h2>Product</h2>
                   <!--  <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p> -->
               </div>

               <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                   data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                   <div>
                       <ul class="portfolio-flters">
                           <li data-filter="*" class="filter-active">All</li>
                           @if($productcategory)
                           @foreach($productcategory as $category)
                           <li data-filter=".filter-{{$category->id}}">{{ucfirst($category->title)}}</li>
                           @endforeach
                           @endif
                       </ul><!-- End Portfolio Filters -->
                   </div>

                   <div class="row gy-4 portfolio-container">
                       @if($productcategory)
                       @foreach($productcategory as $category)
                       @if($category->Product)
                       @foreach($category->Product as $product)
                       <div class="col-xl-4 col-md-6 portfolio-item filter-{{@$category->id}}">
                           <div class="portfolio-wrap">
                               <a href="{{asset('public/images/product/'.$product->image)}}"
                                   data-gallery="portfolio-gallery-{{@$category->id}}" class="glightbox"><img
                                       src="{{asset('public/images/product/'.$product->image)}}" class="img-fluid"
                                       alt=""></a>
                               <div class="portfolio-info">
                                   <h4><a href="{{route('product',['id'=>$product->slug])}}"
                                           title="More Details">{{$product->title}}</a>
                                   </h4>

                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->
                       @endforeach
                       @endif
                       @endforeach
                       @endif
                   </div><!-- End Portfolio Container -->

               </div>

           </div>
       </section><!-- End Portfolio Section -->




       <!-- ======= Contact Section ======= -->
       <?php $getcontactdetails = getcontactdetails(); ?>
       @if($getcontactdetails)
       <section id="contact" class="contact">
           <div class="container" data-aos="fade-up">

               <div class="section-header">
                   @if($getcontactdetails)
                   <h2>{{@$getcontactdetails->head}}</h2>
                   @else
                   <h2>Contact Us</h2>
                   @endif
                   @if(@$getcontactdetails->sub_heading)

                   <p>{{$getcontactdetails->sub_heading}}</p>
                   @endif
               </div>

               <div class="row gx-lg-0 gy-4">

                   <div class="col-lg-4">

                       <div class="info-container d-flex flex-column align-items-center justify-content-center">
                           @if(@$getcontactdetails->address)
                           <div class="info-item d-flex">
                               <i class="bi bi-geo-alt flex-shrink-0"></i>
                               <div>
                                   <h4>Location:</h4>
                                   <p>{{@$getcontactdetails->address}}</p>
                               </div>
                           </div><!-- End Info Item -->
                           @endif
                           @if(@$getcontactdetails->email)
                           <div class="info-item d-flex">
                               <i class="bi bi-envelope flex-shrink-0"></i>
                               <div>
                                   <h4>Email:</h4>
                                   <p>{{@$getcontactdetails->email}}</p>
                               </div>
                           </div><!-- End Info Item -->
                           @endif
                           @if(@$getcontactdetails->phone)
                           <div class="info-item d-flex">
                               <i class="bi bi-phone flex-shrink-0"></i>
                               <div>
                                   <h4>Call:</h4>
                                   <p>{{@$getcontactdetails->phone}}</p>
                               </div>
                           </div><!-- End Info Item -->
                           @endif

                       </div>

                   </div>

                   <div class="col-lg-8">
                       <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                           <div class="row">
                               <div class="col-md-6 form-group">
                                   <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                               </div>
                               <div class="col-md-6 form-group mt-3 mt-md-0">
                                   <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                               </div>
                           </div>
                           <div class="form-group mt-3">
                               <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                           </div>
                           <div class="form-group mt-3">
                               <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                   required></textarea>
                           </div>
                           <div class="my-3">
                               <div class="loading">Loading</div>
                               <div class="error-message"></div>
                               <div class="sent-message">Your message has been sent. Thank you!</div>
                           </div>
                           <div class="text-center"><button type="submit">Send Message</button></div>
                       </form>
                   </div><!-- End Contact Form -->

               </div>

           </div>
       </section><!-- End Contact Section -->
       @endif
   </main><!-- End #main -->

   @endsection