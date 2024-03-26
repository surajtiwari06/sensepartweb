@extends('layouts.app')
@section('content')


    <div class="page-content">
        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
          <div class="breadcrumb-bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg-1.jpg') }}"></div>
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                  <div class="tpbreadcrumb">
                      <h2 class="breadcrumb-title pb-20">Welcome to Sensepart!</h2>
                      <h5 class="text-white">A company turning ideas into beautiful things.</h5>
                  </div>
                </div>
            </div>
          </div>
          <div class="breadcrumb-shape">
            <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
            </div>
            <div class="breadcrumb-shape-4 wow slideInRight"  data-wow-duration="1.2s" data-wow-delay=".1s">
                <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
            </div>
            <div class="breadcrumb-shape-5 wow slideInRight"  data-wow-duration="1.4s" data-wow-delay=".3s">
                <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
            </div>
          </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- video-area-start -->
        <section class="video-area tp-benifits-inner pt-120">
          <div class="container">
            <div class="row">              
                <div class="col-xxl-7 col-xl-6 col-lg-6 order-2 order-lg-1">
                  <div class="tp-benifits-5-thumb">
                      <div class="tp-benifits-5-thumb-1">
                        <img src="{{ asset('assets/img/about/five/about-5-thumb-1.jpg') }}" alt="">
                      </div>
                      <div class="tp-benifits-5-thumb-2 overlay-anim">
                        <div class="tp-thumb-common-overlay wow"></div>
                        <img src="{{ asset('assets/img/about/five/about-5-thumb-2.jpg') }}" alt="">
                      </div>
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-6 order-1 order-lg-2">
                  <div class="tp-video-two-wrapper p-relative pb-120 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".6s">
                      <div class="tp-section mb-35">
                        <span class="tp-section-sub-title">Discover Our Benefits</span>
                        <h4 class="tp-section-title">Your Innovation Partner</h4>
                        <div class="tp-section-title-wrapper">
                            <p>We are a system with an orchestrated assembly of symbols and processes, optimizing operational efficiency for seamless performance.</p>
                        </div>
                        <div class="tp-section-title-info d-flex align-items-center mt-30">
                            <div class="tp-section-title-info-icon">
                              <i class="flaticon-project"></i>
                            </div>
                            <div class="tp-section-title-info-text">
                              <span>Fueling your ideas with innovative solutions and unparalleled support.</span>
                          </div>
                        </div>
                      </div>
                      <div class="tp-video-two-list mb-50">
                        <ul>
                            <div class="tp-section-title-info-text">
                              <li><span><i class="fa-regular fa-circle-check"></i></span>Unlocking possibilities through collaboration.</li>
                              <li><span><i class="fa-regular fa-circle-check"></i></span>Ensuring success with excellence commitment.</li>
                            </ul>
                      </div>
                      <div class="tp-about-details d-flex align-items-center flex-wrap">
                        <div class="tp-about-btn mr-30 mb-10">
                            <a class="tp-btn" href="{{ asset('/hire') }}">Discover More</a>
                        </div>                         
                      </div>
                  </div>
                </div>
            </div>
          </div> 
        </section>
        <!-- video-area-end -->

        <!-- feature-area-start -->
        <section class="feature-area pt-120 pb-90 mb-180 p-relative feature-inner-bg" data-background="{{ asset('assets/img/feature/inner/feature-inner-bg-1.jpg') }}">
          <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-item mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                      <div class="tp-feature-icon">
                        <i class="flaticon-solution-1"></i>
                      </div>
                      <div class="tp-feature-content">
                        <h4 class="tp-feature-content-title">Visionary Perspective</h4>
                        <p>Fostering a future where technology seamlessly integrates with human innovation, creating boundless possibilities.</p>
                    </div>
                      <div class="tp-feature-shape-two">
                        <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                      <div class="tp-feature-icon">
                        <i class="flaticon-search-engine"></i>
                      </div>
                      <div class="tp-feature-content">
                        <h4 class="tp-feature-content-title">Guiding Principles</h4>
                        <p>Dedicated to delivering transformative solutions, driving client success, and leaving a lasting impact on the global technological landscape.</p>
                    </div>  
                      <div class="tp-feature-shape-two">
                        <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-item mb-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                      <div class="tp-feature-icon">
                        <i class="flaticon-speed"></i>
                      </div>
                      <div class="tp-feature-content">
                        <h4 class="tp-feature-content-title">Strategic Advancement</h4>
                        <p>Pursuing strategic evolution, innovation, and collaborative partnerships to achieve growth for our clients and organization.</p>
                    </div>
                      <div class="tp-feature-shape-two">
                        <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="tp-feature-shape">
            <div class="tp-feature-shape-one w-img">
                <img src="{{ asset('assets/img/feature/one/features-bg.png') }}" alt="">
            </div>
          </div>
        </section>
        <!-- feature-area-end -->

        <!-- counter-area-start -->
        <!-- <section class="counter-area tp-counter-overlay pb-140 p-relative">
          <div class="tp-counter-bg" data-background="assets/img/counter/counter-bg-1.jpg"></div>
          <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                  <div class="tp-counter-item text-center mb-30">
                      <div class="tp-counter-item-icon">
                        <i class="flaticon-project-management"></i>
                      </div>
                      <div class="tp-counter-item-content">
                        <h3 class="tp-counter-item-count">
                            <span data-purecounter-duration="1" data-purecounter-end="3480"  class="purecounter">3480</span>
                        </h3>
                        <p>Project Completed</p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3">
                  <div class="tp-counter-item text-center mb-30">
                      <div class="tp-counter-item-icon">
                        <i class="flaticon-consultant"></i>
                      </div>
                      <div class="tp-counter-item-content">
                        <h3 class="tp-counter-item-count">
                            <span data-purecounter-duration="1" data-purecounter-end="428"  class="purecounter">428</span>
                        </h3>
                        <p>IT Specialist</p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3">
                  <div class="tp-counter-item text-center mb-30">
                      <div class="tp-counter-item-icon">
                        <i class="flaticon-project-management"></i>
                      </div>
                      <div class="tp-counter-item-content">
                        <h3 class="tp-counter-item-count">
                            <span data-purecounter-duration="1" data-purecounter-end="6980"  class="purecounter">6980</span>
                        </h3>
                        <p>Happy Clients </p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3">
                  <div class="tp-counter-item counter-item-last  text-center mb-30">
                      <div class="tp-counter-item-icon">
                        <i class="flaticon-solution-1"></i>
                      </div>
                      <div class="tp-counter-item-content">
                        <h3 class="tp-counter-item-count">
                            <span data-purecounter-duration="1" data-purecounter-end="256"  class="purecounter">256</span>
                        </h3>
                        <p>Smart Solution </p>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </section> -->
        <!-- counter-area-end -->

        <!-- management-area-start -->
        <section class="management-area tp-management-position pb-60">
          <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6">
                  <div class="tp-management-thumb-wrap p-relative">
                      <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="tp-thumb-common-overlay wow"></div>
                        <img src="{{ asset('assets/img/thumbs/management-thumb-2.jpg') }}" alt="">
                      </div>
                      <div class="tp-management-shape-1">
                        <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                      </div>
                  </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                  <div class="tp-management-wrap pb-60 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                      <div class="tp-section mb-40">
                        <span class="tp-section-sub-title">Strategic Guidance</span>
                        <h4 class="tp-section-title">Sculpting Your Pathway to Success</h4>
                        <div class="tp-section-title-wrapper">
                            <span>Empowering growth with strategic and effective technical solutions.</span>
                        </div>
                      </div>
                      <div class="tp-management-list">
                        <div class="tp-management-item d-flex">
                            <div class="tp-management-item-icon">
                              <i class="flaticon-data-protection"></i>
                            </div>
                            <div class="tp-management-item-content">
                              <h5 class="tp-management-item-title">Data Protection</h5>
                              <p>Ensure the security and integrity of your data.</p>
                        </div>
                        </div>
                        <div class="tp-management-item d-flex">
                            <div class="tp-management-item-icon">
                              <i class="flaticon-optimization"></i>
                            </div>
                            <div class="tp-management-item-content">
                              <h5 class="tp-management-item-title">Optimize IT System</h5>
                              <p>Enhance efficiency through strategic IT system optimization.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!-- management-area-end -->

        <!-- team-area-start -->
        <!-- <section class="team-area fix pb-60">
          <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="tp-team-3-wrapper text-center">
                      <div class="tp-section tp-section-3 mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <span class="tp-section-sub-title">Meet With Our Specialist</span>
                        <h4 class="tp-section-title">Team that Builds Ideas Driven <br> by the Future</h4>
                      </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="tp-team-3-item mb-40">
                      <div class="tp-team-3-thumb">
                        <div class="tp-team-3-thumb-wrap tp-thumb-common fix">
                            <div class="tp-thumb-common-overlay wow"></div>
                            <img src="assets/img/team/team-3-thumb-1.jpg" alt="">
                        </div>
                        <div class="tp-team-3-thumb-social">
                            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-twitter"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                        </div>
                      </div>
                      <div class="tp-team-3-content">
                        <h5 class="tp-team-3-title"><a href="team-details.html">David Backhum</a></h5>
                        <span>CEO & Founder</span>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="tp-team-3-item mb-40">
                      <div class="tp-team-3-thumb">
                        <div class="tp-team-3-thumb-wrap tp-thumb-common fix">
                            <div class="tp-thumb-common-overlay wow"></div>
                            <img src="assets/img/team/team-3-thumb-2.jpg" alt="">
                        </div>
                        <div class="tp-team-3-thumb-social">
                            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-twitter"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                        </div>
                      </div>
                      <div class="tp-team-3-content">
                        <h5 class="tp-team-3-title"><a href="team-details.html">Ketty Williams</a></h5>
                        <span>Ui/Ux Designer</span>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="tp-team-3-item mb-40">
                      <div class="tp-team-3-thumb">
                        <div class="tp-team-3-thumb-wrap tp-thumb-common fix">
                            <div class="tp-thumb-common-overlay wow"></div>
                            <img src="assets/img/team/team-3-thumb-3.jpg" alt="">
                        </div>
                        <div class="tp-team-3-thumb-social">
                            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-twitter"></i></span></a>
                            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                        </div>
                      </div>
                      <div class="tp-team-3-content">
                        <h5 class="tp-team-3-title"><a href="team-details.html">Harry Newman</a></h5>
                        <span>Frontend Developer</span>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </section> -->
        <!-- team-area-end -->

        <!-- cta-area-star -->
        <section class="cta-area tp-cta-three-bg" data-background="{{ asset('assets/img/bg/project-2-bg-1.jpg') }}">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-1 col-lg-2">
                  <div class="tp-about-3-item-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                      <i class="flaticon-solution"></i>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                  <div class="tp-cta-three-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                      <h2 class="text-dark"> Always Ready <br>For Your Problem</h2>
                  </div>
                </div>
                <div class="offset-xl-4 col-xl-3 col-lg-4">
                  <div class="tp-cta-three-btn wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".4s">
                      <a href="{{ asset('/software') }}" class="tp-btn">Discover More</a>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!-- cta-area-end -->
    </div>

@endsection