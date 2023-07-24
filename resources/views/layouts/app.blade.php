<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sensepart</title>
  
  <link rel="shortcut icon" href="{{ asset('assets/img/SENS-removebg-preview.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/colors/aqua.css') }}">
  <link rel="preload" href="{{ asset('assets/css/fonts/thicccboi.css') }}" as="style" onload="this.rel='stylesheet'">
  
  <link rel="stylesheet" href="{{ asset('./assets/css/theme/_icons.scss') }}">
  <link rel="stylesheet" href="{{ asset('https://unicons.iconscout.com/release/v4.0.0/css/line.css') }}">
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}">
  {{-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"); --}}
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{ asset('index.html') }}">
              <img class="logo-dark" src="{{ asset('assets/img/sensepart-logo.png') }}" style="width: 150px;" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
              <img class="logo-light" src="{{ asset('assets/img/sensepart-logo.png') }}" style="width: 150px;"  srcset="./assets/img/logo-light@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sensepart</h3>
              <button type="button" class="btn-close uil-times-square" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ asset('/') }}">Home</a>
                </li>   

                  <!--/.dropdown-menu -->
                <li class="nav-item ">
                  <a class="nav-link " href="{{ asset('about') }}">About Us</a>
                </li>
                  
                  <!--/.dropdown-menu -->
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="">Services</a>
                     <ul class="dropdown-menu">
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('software') }}">Software Development</a></li>
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('ai_ml') }}">AI and ML</a></li>
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('iot') }}">IOT Solutions</a></li>
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('softwaretesting') }}">Software Testing</a></li>
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('nabl') }}">NABL Accreditation & Academy</a></li>
                       <li class="nav-item"><a class="dropdown-item" href="{{ asset('staffing') }}">Staffing and Recruitment</a></li>
                    </ul> 
                  </li>
               
             
              <li class="nav-item dropdown">
                  <a class="nav-link " href="{{ asset('blog') }}">Blog</a>
                </li>
              </ul>
               
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="{{ asset('mailto:info@sensepart.in') }}"><span class="__cf_email__" >info@sensepart.in</span></a><br /> 
                  <a href="{{ asset('tel:9265364235') }}"> 9265364235</a>
                  <!-- <nav class="nav social social-white mt-4">
                    <a href="{{ asset('#"><i class="uil uil-twitter') }}"></i></a>
                    <a href="{{ asset('#"><i class="uil uil-facebook-f') }}"></i></a>
                    <a href="{{ asset('#"><i class="uil uil-dribbble') }}"></i></a>
                    <a href="{{ asset('#"><i class="uil uil-instagram') }}"></i></a>
                    <a href="{{ asset('#"><i class="uil uil-youtube') }}"></i></a>
                  </nav> -->
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li> -->
              <li class="nav-item d-none d-md-block">
                <a href="{{ asset('contact') }}" class="btn btn-sm btn-primary rounded">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type something and press enter">
          </form>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->

@yield('content')

<footer class="bg-dark text-inverse">
    <div class="container py-7 py-md-3">
      <div class="mt-4"></div>
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="{{ asset('assets/img/sensepart-logo.png')}}" style="width: 150px;" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">© 2022 Sensepart. <br class="d-none d-lg-block" />All rights reserved.</p>
           
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Sensepart, 304 3rd Floor, Atlantis, Opposite Vadodara central, VADODARA, GUJARAT, 390020</address>
            <a href="{{ asset('mailto:info@sensepart.in') }}"><span class="__cf_email__" >info@sensepart.in</span></a><br /> 
            <a href="{{ asset('tel:9265364235') }}"> 9265364235</a>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="{{ asset('/') }}">Home</a></li>
              <li><a href="{{ asset('about') }}">About us</a></li>
              <li><a href="{{ asset('service') }}">Services</a></li>
              <li><a href="{{ asset('contact') }}">Contact</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-3 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Quick Links</h4>
            <ul class="list-unstyled  mb-0">
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('software') }}">Software Development</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('ai_ml') }}">AI and ML</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('iot') }}">IOT Solutions</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('softwaretesting') }}">Software Testing</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('nabl') }}">NABL Accreditation & Academy</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{ asset('staffing') }}">Staffing and Recruitment</a></li>
          
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div> -->
  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
{{-- script for contact form --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>