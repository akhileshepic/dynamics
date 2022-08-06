  <script src="{{asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>
  <script src="{{asset('public/frontend/assets/js/jquery.min.js')}}"></script>
  <script>
$(document).ready(function() {
    var path = window.location.href;

    console.log(path);
    $('#navbar li a').each(function() {
        if (this.href === path) {
            $('#navbar li a').removeClass('active');
            $(this).addClass('active');
        }
    });

})
  </script>