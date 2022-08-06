  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

      <div class="container">
          <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                  <a href="index.html" class="logo d-flex align-items-center">
                      <span>Impact</span>
                  </a>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                      valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                  <div class="social-links d-flex mt-4">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>

              <div class="col-lg-4 col-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="{{route('home')}}">Home</a></li>
                      <li><a href="{{route('about')}}">About us</a></li>
                      <li><a href="{{route('service')}}">Services</a></li>
                      <li><a href="{{route('home')}}">Terms of service</a></li>
                      <li><a href="{{route('home')}}">Privacy policy</a></li>
                  </ul>
              </div>


              <?php $getcontactdetails = getcontactdetails(); ?>
              @if(@$getcontactdetails)
              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4>Contact Us</h4>

                  <p>@if(@$getcontactdetails->address){{@$getcontactdetails->address}} @else
                      Apolis Building,Plot no 736, LGF Udyog Vihar Phase V ,Sector 19, Gurugram, Haryana 122008 (India)
                      @endif <br><br>
                      @if(@$getcontactdetails->phone)
                      <strong>Phone:</strong> {{@$getcontactdetails->phone}}<br>
                      @else
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      @endif
                      @if(@$getcontactdetails->email)
                      <strong>Email:</strong> {{@$getcontactdetails->email}}<br>
                      @else
                      <strong>Email:</strong> info@example.com<br>
                      @endif
                  </p>

              </div>
              @endif
          </div>
      </div>

      <div class="container mt-4">
          <div class="copyright">
              &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
      </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>