@extends('frontend.common.master')
@section('title')
<title> Epiccorporations | Services </title>
 
@section('style')
<style>
 .contact-section {
    height: 100%;
    background: #eee;
}
header.jumbotron {
  background-image: url('{{asset('public/frontend/images/contact.png')}}');
  background-size: cover;
  margin-bottom: 0px!important;
  object-fit: cover;
  width: 100%;
}
  </style>
@endsection
 @section('body')
  <!-- Slider -->
  <header class="jumbotron">
        <div class="container">
          <h1 class="text-center">Contact Us</h1>
         
        </div>
      </header>

  <!-- About Section -->
   <section id="contact" class="contact-section aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-c">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12">
                    <h1 class="text-center">Contact Us</h1>
                </div> -->
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
    <!-- map -->
       <div class="back-contacts pt-106">                 
                <div class="back-image-maping">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.154793376389!2d77.08260091507974!3d28.504990182468266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19350f3a2e97%3A0x835bc6b909d2b68e!2sApolis!5e0!3m2!1sen!2sin!4v1659096061930!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div> 

@endsection