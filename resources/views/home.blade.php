@extends('layouts.app')
@section('content')
  
     <!-- CONTENT START -->
    <div class="page-content">
          <!-- hero -->
          <section class="slider-area tp-slider-wrap">
            <div class="swiper-container tp-slider-active">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="tp-slider-wrapper">
                      <div class="tp-slider-bg"  style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-5.jpg') }}');"></div>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                              <div class="tp-slider-content">
                                  <span class="tp-slider-sub-title">Innovating Tech Solution</span>
                                  <h2 class="tp-slider-title">Convert Your <br>Idea Into Reality </h2>
                                   <div class="tp-slider-btn">
                                    <a class="tp-btn" href="{{ asset('about') }}">Discover More</a>
                                  </div> 
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="swiper-slide">
                    <div class="tp-slider-wrapper">
                        <div class="tp-slider-bg"  style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-1.jpg') }}');"></div>
                        <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                <div class="tp-slider-content">
                                    <span class="tp-slider-sub-title">Innovating Tech Solution</span>
                                    <h2 class="tp-slider-title">Software<br>Development</h2>
                                    <div class="tp-slider-btn">
                                      <a class="tp-btn" href="{{ asset('software') }}">Discover More</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tp-slider-wrapper">
                        <div class="tp-slider-bg" style="background-image: url('{{ asset('assets/img/slider/image.png') }}');"></div>
                        <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                <div class="tp-slider-content">
                                    <span class="tp-slider-sub-title">Innovating Tech Solution</span>
                                    <h2 class="tp-slider-title"><span>Artificial <br> Intelligence</h2>
                                    <div class="tp-slider-btn">
                                      <a class="tp-btn" href="{{ asset('ai_ml') }}">Discover More</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tp-slider-wrapper">
                        <div class="tp-slider-bg" style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-3.jpg') }}');"></div>
                        <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                <div class="tp-slider-content">
                                    <span class="tp-slider-sub-title">Innovating Tech Solution</span>
                                    <h2 class="tp-slider-title"><span>Internet <br> Of Things</h2>
                                    <div class="tp-slider-btn">
                                      <a class="tp-btn" href="{{ asset('iot') }}">Discover More</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>                      
                    </div>
                  </div> 
              </div>
            </div>
            <div class="tp-slider-dot"></div>
          </section>
          <!-- hero-end -->

           <!-- welcome-start -->
          <section class="about-area pt-115 tp-about-3 pb-60">
            <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                    <div class="tp-about-3-wrap">
                        <div class="tp-about-3-thumb-1 tp-thumb-common fix mb-10 mr-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/about/three/about-3-thumb-3.jpg') }}" alt="">
                        </div>
                        <div class="tp-about-3-thumb-2 wow fadeInLeft ml-50 tp-thumb-common fix" data-wow-duration="1s" data-wow-delay=".5s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/about/three/about-3-thumb-4.jpg') }}" alt="">
                        </div>
                    </div>
                  </div>
                  <div class="offset-lg-1 col-lg-6">
                    <div class="tp-about-3-wrapper mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="tp-section tp-section-3 mb-50">
                          <span class="tp-section-sub-title">Welcome to Sensepart</span>
                          <h4 class="tp-section-title">Solutions Tailored to Your <br>IT Challenges</h4>
                          <div class="tp-section-title-wrapper">
                              <p>Experience seamless resolution to your IT challenges with Sensepart. Our tailored solutions simplify complexities,
                                  ensuring optimal performance for your business needs.  </p>
                          </div>
                        </div>
                        <div class="tp-about-3-item mb-35">
                          <div class="tp-about-3-item-icon">
                              <i class="flaticon-solution"></i>
                          </div>
                          <div class="tp-about-3-item-content">
                              <h4 class="tp-about-3-item-title">Deliver awesome idea</h4>
                              <p>Transform your concepts into reality with <br>our expert team.</p>
                          </div>
                        </div>
                        <div class="tp-about-3-list mb-45">
                          <ul>
                              <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Streamline processes for enhanced efficiency.</li>
                              <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Customized solutions tailored to your needs.</li>
                          </ul>
                        </div>
                        <div class="tp-about-3-details  d-flex align-items-center">
                          <div class="tp-about-3-btn">
                              <a class="tp-btn" href="{{ asset('about') }}">Learn More</a>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <!-- welcome-end -->

          <!-- Offering-area-start -->
          <section class="offering-area tp-offer-bg pb-80 pt-120" style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
              <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                      <div class="tp-section tp-section-white-two mb-80">
                          <span class="tp-section-sub-title">What We’re Offering</span>
                          <h4 class="tp-section-title">We Provide Exclusive Service <br> For Your Business</h4>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="tp-section-title-wrapper mb-80"> 
                          <p>We consider everything – aesthetics, substrates, prepress, binding, and finishing. Our expertise
                              goes beyond what most marketers are expected to know.</p>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                          <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/world-wide-web.png') }}" alt="" style="width: 50px;">
                          </div>
                          <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ asset('web') }}">Web <br> Development</a></h4>
                            <p>Explore cutting-edge web development solutions.</p>
                          </div>
                          <div class="tp-offer-item-btn">
                            <a href="{{ asset('web') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s">
                          <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/coding.png') }}" alt="" style="width: 50px;">
                          </div>
                          <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a  href="{{ asset('software') }}">Software Development</a></h4>
                            <p>Discover advanced software solutions.</p>
                          </div>
                          <div class="tp-offer-item-btn">
                            <a href="{{ asset('software') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s">
                          <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/ai.png') }}" alt="" style="width: 50px;">
                          </div>
                          <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ asset('ai_ml') }}">Artificial <br> Intelligence</a></h4>
                            <p>Unlock the potential of artificial intelligence and machine learning.</p>
                          </div>
                          <div class="tp-offer-item-btn">
                            <a href="{{ asset('ai_ml') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                          <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/iot.png') }}" alt="" style="width: 50px;">
                          </div>
                          <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ asset('iot') }}">Internet <br> Of Things</a></h4>
                            <p>Connect and optimize with our seamless IOT solutions.</p>
                          </div>
                          <div class="tp-offer-item-btn">
                            <a href="{{ asset('iot') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </section>
          <!-- Offering-area-end -->   

          <!-- project-area-start -->
          <!-- <section class="project-area tp-project-3-bg pt-115 pb-60 mb-115" data-background="assets/img/project/three/project-3-bg-1.jpg">
              <div class="container tp-project-3-width">
                <div class="row">
                    <div class="col-12">
                      <div class="tp-section tp-section-3 mb-50 text-center">
                          <span class="tp-section-sub-title">Recently Completed work</span>
                          <h4 class="tp-section-title">Check Our latest projects Just <br> We Have Done</h4>
                      </div>
                    </div>
                </div>
                <div class="swiper-container tp-project-3-slider-active">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="tp-project-3-item mb-30 tp-thumb-common fix wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".6s">
                            <div class="tp-project-3-thumb">
                                <div class="tp-thumb-common-overlay wow"></div>
                                <img src="assets/img/project/three/project-3-thumb-1.jpg" alt="">
                            </div>
                            <div class="tp-project-3-info d-flex justify-content-between align-items-center">
                                <div class="tp-project-3-content">
                                  <span>Design</span>
                                  <h4 class="tp-project-3-title under-line-white"><a href="project-details.html">Tech Solution</a></h4>
                                </div>
                                <div class="tp-project-3-icon">
                                  <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="tp-project-3-item mb-30 tp-thumb-common fix wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-project-3-thumb">
                                <div class="tp-thumb-common-overlay wow"></div>
                                <img src="assets/img/project/three/project-3-thumb-2.jpg" alt="">
                            </div>
                            <div class="tp-project-3-info d-flex justify-content-between align-items-center">
                                <div class="tp-project-3-content">
                                  <span>Development</span>
                                  <h4 class="tp-project-3-title under-line-white"><a href="project-details.html">Smart Vision</a></h4>
                                </div>
                                <div class="tp-project-3-icon">
                                  <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="tp-project-3-item mb-30 tp-thumb-common fix wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-project-3-thumb">
                                <div class="tp-thumb-common-overlay wow"></div>
                                <img src="assets/img/project/three/project-3-thumb-3.jpg" alt="">
                            </div>
                            <div class="tp-project-3-info d-flex justify-content-between align-items-center">
                                <div class="tp-project-3-content">
                                  <span>Technology</span>
                                  <h4 class="tp-project-3-title under-line-white"><a href="project-details.html">Analytic Solution</a></h4>
                                </div>
                                <div class="tp-project-3-icon">
                                  <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="tp-project-3-item mb-30 tp-thumb-common fix wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".6s">
                            <div class="tp-project-3-thumb">
                                <div class="tp-thumb-common-overlay wow"></div>
                                <img src="assets/img/project/three/project-3-thumb-4.jpg" alt="">
                            </div>
                            <div class="tp-project-3-info d-flex justify-content-between align-items-center">
                                <div class="tp-project-3-content">
                                  <span>Marketing</span>
                                  <h4 class="tp-project-3-title under-line-white"><a href="project-details.html">Digital Marketing</a></h4>
                                </div>
                                <div class="tp-project-3-icon">
                                  <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </section> -->
          <!-- project-area-end -->

          <!-- solution-area-start -->
          <section class="solution-area tp-solution-wrapper pb-60 mb-135">
              <div class="container">
                <div class="row align-items-end">
                    <div class="offset-lg-6 col-lg-6">
                      <div class="tp-solution-wrap ml-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-section tp-section-3 mb-50">
                            <span class="tp-section-sub-title">Technology Solution</span>
                            <h4 class="tp-section-title">Smart Ideas Tailored for Your Industry</h4>
                            <div class="tp-section-title-wrapper">
                                <p> Experience innovative solutions designed specifically for your industry. Our expertise ensures effective strategies and seamless 
                                  implementation to elevate your business. </p>
                            </div>
                          </div>
                          <div class="tp-solution-info mb-50">
                            <ul>
                                <li>
                                  <div class="tp-solution-info-item d-flex align-items-center">
                                      <div class="tp-solution-info-icon">
                                        <i class="flaticon-technical-support"></i>
                                      </div>
                                      <div class="tp-solution-info-content">
                                        <h4 class="tp-solution-info-title">Satisfaction <br>Guaranteed</h4>
                                      </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="tp-solution-info-item d-flex align-items-center">
                                      <div class="tp-solution-info-icon">
                                        <i class="flaticon-optimization"></i>
                                      </div>
                                      <div class="tp-solution-info-content">
                                        <h4 class="tp-solution-info-title">Continuous <br>Technical Assistance</h4>
                                      </div>
                                  </div>
                                </li>
                            </ul>
                          </div>
                          <div class="tp-solution-list">
                            <ul>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>24/7 support for seamless operations.</li>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Expert guidance for your technical inquiries.</li>                              
                            </ul>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="tp-solution-bg" style="background-image: url('{{ asset('assets/img/bg/solution-bg-1.jpg') }}');"> </div>
              <div class="tp-solution-shape-1">
                <img src="{{ asset('assets/img/shape/solution-shape-1.png') }}" alt="">
              </div>
          </section>
          <!-- solution-area-end -->

    </div>
     <!-- CONTENT END -->    
@endsection
