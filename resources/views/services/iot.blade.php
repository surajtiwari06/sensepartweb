@extends('layouts.app')
@section('content')

    <div class="page-content">
      <!-- breadcrumb-area-start -->
      <section class="breadcrumb-area breadcrumb-wrap">
          <div class="breadcrumb-bg" style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-3.jpg') }}');"></div>
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                  <div class="tpbreadcrumb mb-15">
                      <h2 class="breadcrumb-title">Internet of Things</h2>
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

      <!-- step-area-start -->
      <section class="feature-area tp-feature-3-bg" data-background="{{ asset('assets/img/feature/three/feature-3-bg-1.jpg') }}">
        <div class="container">
          <div class="row align-items-end mb-50">
            <div class="col-xl-5 col-lg-6">
                <div class="tp-section tp-section-two mb-50 wow fadeInRight" data-wow-duration="1s"
                  data-wow-delay=".4s">
                  <span class="tp-section-sub-title">Explore Our Services</span>
                  <h4 class="tp-section-title">IoT Development Services</h4>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-5 col-lg-6">
                <div class="tp-section mb-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="tp-section-title-wrapper">
                      <p>Empowering your business with our team of skilled developers and designers, 
                          utilizing the latest technologies to craft robust, scalable, and user-friendly IOT applications.</p>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
                <div class="tp-feature-3-wrapper d-flex align-items-center justify-content-between">
                  <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s" 
                      style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                      <a href="#software-section">
                      <div class="tp-feature-3-item-icon">
                        <img src="{{ asset('assets/img/icon/embedded-software.png') }}" alt="" style="width: 50px;">
                      </div>
                      <div class="tp-feature-3-item-content">
                        <h4 class="tp-feature-3-item-title">Embedded Software Development</h4>
                        <span>E</span>
                      </div>
                      </a>
                  </div>
                  <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                      style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                      <a href="#hardware-section">
                      <div class="tp-feature-3-item-icon">
                        <img src="{{ asset('assets/img/icon/embedded-hardware.png') }}" alt="" style="width: 50px;">
                      </div>
                      <div class="tp-feature-3-item-content">
                        <h4 class="tp-feature-3-item-title">Embedded Hardware Development</h4>
                        <span>E</span>
                      </div>
                      </a>
                  </div>
                  <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".4s" data-wow-delay=".4s" 
                      style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: bounceIn;">
                      <a href="#product-section">
                      <div class="tp-feature-3-item-icon">
                        <img src="{{ asset('assets/img/icon/product-design.png') }}" alt="" style="width: 50px;">
                      </div>
                      <div class="tp-feature-3-item-content">
                        <h4 class="tp-feature-3-item-title">Product<br> Design</h4>
                        <span>P</span>
                      </div>
                      </a>
                  </div>
                  <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                      style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                      <a href="#proto-section">
                      <div class="tp-feature-3-item-icon">
                        <img src="{{ asset('assets/img/icon/production.png') }}" alt="" style="width: 50px;">
                      </div>
                      <div class="tp-feature-3-item-content">
                        <h4 class="tp-feature-3-item-title">Protoyping and Production</h4>
                        <span>P</span>
                      </div>
                      </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- step-area-end -->

      <!-- sercices-area-start -->
      <section class="services-area pt-115 pb-80">
        <div class="container">
          <div class="row mb-15">
                <div class="col-lg-6" id="software-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Embedded Software Development</h4>
                    <p>
                      Empower your devices with cutting-edge intelligence through our Embedded Software Development solutions. 
                      From microcontrollers to complex systems, we specialize in crafting software that seamlessly integrates 
                      with hardware, optimizing performance and functionality. Our expertise extends to various industries, 
                      including automotive, consumer electronics, healthcare, and IoT, ensuring that your embedded systems 
                      operate reliably in diverse environments, from factory floors to remote locations.
                    </p>                      
                    <div class="tp-services-details-check d-flex align-items-center mt-50">
                        <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Tailored development process for project-specific needs.</span>
                          </div>
                          <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                              <i class="fa-light fa-check"></i>
                              <span>Rigorous testing ensures reliability and stability.</span>
                          </div>
                    </div>
                    </div>                 
                </div>
                <div class="col-lg-6">                      
                  <div class="tp-management-thumb-wrap p-relative">
                    <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="tp-thumb-common-overlay wow"></div>
                        <img src="{{ asset('assets/img/thumbs/software.webp') }}" alt="">
                    </div>
                    <div class="tp-management-shape-1">
                        <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                    </div>
                </div>
              </div>
            </div>
            <div class="tp-services-details-faq mb-70">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                      <div class="tp-services-details-faq-item-icon">
                          <i class="flaticon-medal"></i>
                      </div>
                      <div class="tp-services-details-faq-item-content">
                          <h4 class="tp-services-details-faq-title">Innovative Solutions</h4>
                          <span>We strive to provide cutting-edge and innovative solutions</span>
                      </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                      <div class="tp-services-details-faq-item-icon">
                          <i class="flaticon-medal"></i>
                      </div>
                      <div class="tp-services-details-faq-item-content">
                          <h4 class="tp-services-details-faq-title">Reliable Support</h4>
                          <span>Our dedicated support team ensures prompt and reliable assistance</span>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row mb-70">
              <div class="col-lg-6"> 
                  <div class="tp-management-thumb-wrap p-relative">
                    <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp mt-50"
                        data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="tp-thumb-common-overlay wow"></div>
                        <img src="{{ asset('assets/img/thumbs/embedded-hardware.jpg') }}" alt="">
                    </div>
                    <div class="tp-management-shape-1">
                        <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 text-end" id="hardware-section">
                  <div class="tp-services-details-wrapper">
                  <h4 class="tp-services-details-title">Embedded Hardware Development</h4>
                  <p>
                    Elevate your hardware capabilities with our Embedded Hardware Development solutions, 
                    meticulously tailored to meet the demands of modern technology. From concept to prototype,
                    our team specializes in designing and optimizing hardware components for seamless integration 
                    with software systems. Whether you're developing IoT devices, industrial machinery, or consumer 
                    electronics, our expertise ensures robust and reliable hardware solutions that push the boundaries of innovation.
                  </p>                      
                  <div class="tp-services-details-check d-flex align-items-center mt-50">
                      <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                          <i class="fa-light fa-check"></i>
                          <span>Customized hardware solutions for diverse needs.</span>
                        </div>
                        <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Advanced prototyping techniques for rapid iteration and refinement.</span>
                        </div>
                  </div>
                  </div>
              </div>   
          </div>
            <div class="row mb-70">
              <div class="col-lg-6" id="product-section">
                  <div class="tp-services-details-wrapper">
                  <h4 class="tp-services-details-title">Product Design</h4>
                  <p>
                    Revolutionize your product vision with our comprehensive Product Design services, meticulously
                     tailored to bring your ideas to life. From concept to prototype, we specialize in creating 
                     innovative and user-centric designs that captivate audiences and exceed expectations. Our 
                     multidisciplinary approach combines creativity with technical expertise to deliver solutions 
                     that not only look stunning but also function seamlessly across various platforms and devices.
                </p>
                  <div class="tp-services-details-check d-flex align-items-center mt-50">
                    <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                          <i class="fa-light fa-check"></i>
                          <span>Refining concepts and ensuring optimal user experience</span>
                          </div>
                          <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                <i class="fa-light fa-check"></i>
                                <span>Cutting-edge technologies to enhance product functionality</span>
                          </div>
                  </div>
                  </div>
              </div>
              <div class="col-lg-6">                      
                  <div class="tp-management-thumb-wrap p-relative">
                    <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="tp-thumb-common-overlay wow"></div>
                        <img src="{{ asset('assets/img/thumbs/design.jpg') }}" alt="">
                    </div>
                    <div class="tp-management-shape-1">
                        <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                    </div>
                </div>
              </div>
          </div>
            <div class="row mb-70">
                <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                        <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/production1.jpg') }}" alt="">
                        </div>
                        <div class="tp-management-shape-1">
                          <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                  <div class="col-lg-6" id="proto-section">
                    <div class="tp-services-details-wrapper">
                        <h4 class="tp-services-details-title">Protoyping and Production</h4>
                        <p>
                          Transform your innovative concepts into tangible reality with our Prototyping and Production 
                          services, meticulously designed to accelerate your product development journey. From initial 
                          idea to final product, we provide comprehensive support at every stage, leveraging advanced 
                          technologies and industry expertise to bring your vision to life.
                        </p>
                        <div class="tp-services-details-check d-flex align-items-center mt-50">
                          <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                                <i class="fa-light fa-check"></i>
                                <span>Rapid prototyping for quick validation of design concepts</span>
                              </div>
                              <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                <i class="fa-light fa-check"></i>
                                <span>Streamlined production processes ensuring scalability and efficiency.</span>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- sercices-area-end -->

    </div>

@endsection
