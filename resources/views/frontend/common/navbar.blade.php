       <?php $getcontactdetails = getcontactdetails(); ?>
       <section id="topbar" class="topbar d-flex align-items-center">
           <div class="container d-flex justify-content-center justify-content-md-between">
               <div class="contact-info d-flex align-items-center">
                   <i class="bi bi-envelope d-flex align-items-center">@if(@$getcontactdetails->email)<a
                           href="mailto:{{@$getcontactdetails->email}}">{{@$getcontactdetails->email}}</a>@else <a
                           href="mailto:contact@example.com">contact@example.com</a>@endif</i>
                   <i class="bi bi-phone d-flex align-items-center ms-4"><span> @if(@$getcontactdetails->phone)
                           {{@$getcontactdetails->phone}} @else 5589 55488 55 @endif</span></i>
               </div>
               <div class="social-links d-none d-md-flex align-items-center">
                   <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                   <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                   <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                   <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
               </div>
           </div>
       </section><!-- End Top Bar -->

       <header id="header" class="header d-flex align-items-center">

           <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
               <a href="{{route('home')}}" class="logo d-flex align-items-center">
                   <!-- Uncomment the line below if you also wish to use an image logo -->
                   <!-- <img src="assets/img/logo.png" alt=""> -->
                   <h1>Impact<span>.</span></h1>
               </a>
               <nav id="navbar" class="navbar">
                   <ul>
                       <li><a href="{{route('home')}}" class="active">Home</a></li>
                       <li><a href="{{route('about')}}">About</a></li>
                       <li><a href="{{route('service')}}">Services</a></li>

                       <li class="dropdown"><a href="#"><span>Products</span> <i
                                   class="bi bi-chevron-down dropdown-indicator"></i></a>
                           <ul>
                               @php $category=Category() @endphp

                               @if(@$category)
                               @foreach($category as $cat)
                               <li class="dropdown"><a href="#"><span>{{$cat->title}}</span> <i
                                           class="bi bi-chevron-down dropdown-indicator"></i></a>
                                   <ul>
                                       @foreach(@$cat->Product as $pro)
                                       <li><a href="{{route('product',['id'=>$pro->slug])}}">{{$pro->title}}</a></li>
                                       @endforeach
                                   </ul>
                               </li>
                               @endforeach
                               @endif
                               @php $product=Product() @endphp
                               @if(@$product)
                               @foreach($product as $prod)
                               <li><a href="{{route('product',['id'=>$prod->slug])}}">{{$prod->title}}</a></li>
                               @endforeach
                               @endif

                           </ul>
                       </li>
                       <li><a href="#contact">Contact</a></li>
                   </ul>
               </nav><!-- .navbar -->

               <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
               <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

           </div>
       </header><!-- End Header -->
       <!-- End Header -->