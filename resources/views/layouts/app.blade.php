<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="We are a dynamic and forward-thinking organization specializing in two essential domains - IT Solutions and Recruitment. Our mission is to provide innovative technology-driven solutions and efficient talent acquisition services to meet the evolving needs of modern businesses.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sensepart</title>
  
  <link rel="shortcut icon" href="{{ asset('assets/img/SENS-removebg-preview.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/colors/aqua.css') }}">
  <link rel="preload" href="{{ asset('assets/css/fonts/thicccboi.css') }}" as="style" onload="this.rel='stylesheet'">
  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon_tecz.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

   <link rel="stylesheet" href="{{ asset('./assets/css/theme/_icons.scss') }}"> 
  <link rel="stylesheet" href="{{ asset('https://unicons.iconscout.com/release/v4.0.0/css/line.css') }}">
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}">
  {{-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"); --}}
</head>

<body>
  <div class="content-wrapper">
   @if(!isset($ignore_loader) || !$ignore_loader)
   <!-- pre loader area start -->
    {{-- <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
               <div class="tp-preloader-logo">
                  <div class="tp-preloader-circle">
                     <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                        </circle>
                        <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                     </svg>
                  </div>
                  <img src="{{ asset('assets/img/logo/preloader/SENS-mini-logo.png')}}" alt="" style="width: 90px;">
               </div>
               <p class="tp-preloader-subtitle">Loading...</p>
            </div>
         </div>
      </div>
   </div>  --}}
   <!-- pre loader area end -->
   @endif
   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
         </svg>               
      </button>
   </div>
   <!-- back to top end -->


   <!-- header area start -->
   <header>
      <div class="tp-header-area tp-header-3 tp-header-height ">             
         <div id="header-sticky" class="white-bg d-flex justify-content-between">
            <div class="tp-header-3-main d-flex">
               <div class="logo" data-background="{{ asset('assets/img/shape/logo-shape-1.png')}}">
                  <a>
                     <img src="{{ asset('assets/img/logo/sensepart-logo.png')}}" alt="" style="max-width: 213px">
                  </a>
               </div>
               <div class="main-menu tp-header-3-menu d-none d-xl-block ">
                  <nav id="mobile-menu" class="tp-main-menu-content">
                     <ul>
                        <li class="has-dropdown">
                           <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-dropdown">
                           <a href="{{ url('about') }}">About Us</a>
                        </li>
                        <li class="has-dropdown">
                           <a>Services</a>
                           <ul class="tp-submenu">
                              <li><a href="{{ url('software') }}">Software Development</a></li>
                              <li><a href="{{ url('web') }}">Web Development</a></li>
                              <li><a href="{{ url('ai_ml') }}">AI and ML</a></li>
                              <li><a href="{{ url('iot') }}">IOT Solutions</a></li>
                              <li><a href="{{ url('hire') }}">Hire our Developer</a></li>
                           </ul>  
                        </li>
                        <li class="has-dropdown">
                           <a href="{{ url('blog') }}">Blog</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="tp-header-right d-flex align-items-center">
               <div class="tp-header-btn ml-35 mr-30 d-none d-lg-block">
                  <a class="tp-btn" href="{{ url('contact') }}">Get Solution</a>
               </div>
               <div class="d-none d-xxl-block">
                <div class="tp-header-cta d-flex align-items-center">
                   <div class="tp-header-cta-icon d-none d-lg-block">
                      <img src="{{ asset('assets/img/icon/phone-call.png')}}" alt="" style="width: 60px;">
                   </div>
                   <div class="tp-header-cta-content d-none d-lg-block">
                      <p>Need help? Talk to an expert </p>
                      <a href="{{ asset('tel:9265364235') }}">+9265364235</a>
                   </div>
                </div>
             </div>
               <div class="offcanvas-btn d-xl-none ml-30">
                  <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </header>

   <!-- header area end -->
   <div class="offcanvas__area">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
               <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="{{ url('/') }}">
                     <img data-width="120" src="{{ asset('assets/img/logo/sensepart-logo.png') }}" alt="logo">
                  </a>
               </div>
            </div>
            <div class="tp-main-menu-mobile"></div>
            <div class="offcanvas__btn">
               <a href="{{ url('contact') }}" class="tp-btn">Getting Started <i
                     class="fa-regular fa-chevron-right"></i></a>
            </div>             
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>

@yield('content')

   <!-- footer-area-start -->
   <footer>
    <div class="footer-area">
       <div class="tp-footer-top pt-105 pb-70 theme-bg" style="background-image: url('{{ asset('assets/img/footer/one/footer-bg-1.jpg') }}');">
          <div class="container">
             <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                   <div class="tp-footer-widget footer-col-1 mb-40">
                      <div class="tp-footer-widget-logo mb-7">
                         <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo/sensepart-logo.png')}}" alt="logo" style="max-width: 220px">
                         </a>
                      </div>
                      <div class="tp-footer-widget-content">
                         <div class="tp-footer-widget-content-list">
                            <div class="tp-footer-widget-content-list-item">
                               <i class="fa-solid fa-square-phone"></i><a href="{{ asset('tel:9265364235') }}">+9265364235</a>
                            </div>
                            <div class="tp-footer-widget-content-list-item">
                               <i class="fa-solid fa-envelope"></i> <a href="{{ asset('mailto:info@sensepart.in') }}">info@sensepart.in</a>
                            </div>
                            <div class="tp-footer-widget-content-list-item">
                               <i class="fa-solid fa-location-dot"></i> <a href="#">22 Meridian RD, Unit 17,<br> Edison, NJ 08820</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-30">
                   <div class="tp-footer-widget tp-footer-col-2 mb-40">
                      <h4 class="tp-footer-widget-title mb-30">Quick Links</h4>
                      <div class="tp-footer-widget-link">
                          <ul>
                              <li><a href="{{ url('/hire') }}"><i class="fa-sharp fa-solid fa-plus"></i> Hire our Developer</a></li>
                              <li><a href="{{ url('/about') }}"><i class="fa-sharp fa-solid fa-plus"></i> About Us</a></li>                             
                              <li><a href="{{ url('/blog') }}"><i class="fa-sharp fa-solid fa-plus"></i> Blog</a></li>
                              <li><a href="{{ url('/contact') }}"><i class="fa-sharp fa-solid fa-plus"></i> Contact</a></li>
                          </ul>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-30">
                   <div class="tp-footer-widget tp-footer-col-4 mb-40">
                      <h4 class="tp-footer-widget-title mb-30">Our Services</h4>
                      <div class="tp-footer-widget-link">
                          <ul>
                              <li><a href="{{ url('web') }}"><i class="fa-sharp fa-solid fa-plus"></i>Web Development</a></li>
                              <li><a href="{{ url('software') }}"><i class="fa-sharp fa-solid fa-plus"></i> Software Development</a></li>
                              <li><a href="{{ url('ai_ml') }}"><i class="fa-sharp fa-solid fa-plus"></i> AI and ML</a></li>
                              <li><a href="{{ url('iot') }}"><i class="fa-sharp fa-solid fa-plus"></i> IOT Solutions</a></li>
                          </ul>
                      </div>
                  </div>
                </div>
             </div>
          </div>
       </div>
       <div class="tp-footer-bottom">
          <div class="container">
             <div class="row">
                <div class="col-lg-6 col-md-7">
                   <div class="tp-footer-copyright">
                      <span>Copyright © 2024 Sensepart.All Rights Reserved </span>
                   </div>
                </div>
                <div class="col-lg-6 col-md-5">
                   <div class="tp-footer-terms">
                      <a href="#">Terms of Use</a>
                      <a href="#">Privacy Policy</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </footer>
   <!-- footer-area-end -->

  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
{{-- script for contact form --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

 <!-- JS here -->
 <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.js"></script>
 <script src="assets/js/vendor/waypoints.js"></script>
 <script src="assets/js/bootstrap-bundle.js"></script>
 <script src="assets/js/meanmenu.js"></script>
 <script src="assets/js/swiper-bundle.js"></script>
 <script src="assets/js/slick.js"></script>
 <script src="assets/js/range-slider.js"></script>
 <script src="assets/js/magnific-popup.js"></script>
 <script src="assets/js/nice-select.js"></script>
 <script src="assets/js/purecounter.js"></script>
 <script src="assets/js/countdown.js"></script>
 <script src="assets/js/wow.js"></script>
 <script src="assets/js/isotope-pkgd.js"></script>
 <script src="assets/js/imagesloaded-pkgd.js"></script>
 <script src="assets/js/ajax-form.js"></script>
 <script src="assets/js/main.js"></script>
</html>
