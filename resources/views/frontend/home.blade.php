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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/frontend/images/slider-01.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/frontend/images/slider-02.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/frontend/images/slider-03.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
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
   <!-- About Section -->
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

    <!-- Services Section -->


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
                          <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
                          <small></small>
                        </p>
                        <p class="full-width">
                          <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
                          <small></small>
                        </p>
                        <p class="full-width">
                          <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
                        </p>
                        <p class="full-width">
                          <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                          
                        </p>
                      </form>
                    </div>

                    <div class="contacts contact-wrapper">

                      <ul>
                        <li><p class="text-justify"><span><i class="fas fa-map-marker-alt socials"></i></span> Apolis Building,Plot no 736, LGF <br>Udyog Vihar Phase V ,Sector 19,<br> Gurugram, Haryana 122008 (India)</p></li>
                        <span class="hightlight-contact-info">
                          <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com</li>
                          <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text"><a href="tel:9643824343" style="color:#212D31;">+91 9643-82-4343</a></span></li>
                        </span>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

 
@endsection