@extends('layouts.app')
@section('content')


    <div class="page-content">
        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
          <div class="breadcrumb-bg" style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-1.jpg') }}');"></div>
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                  <div class="tpbreadcrumb mb-15">
                      <h2 class="breadcrumb-title">Software Development</h2>
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
                    <h4 class="tp-section-title">Innovative Software Development</h4>
                  </div>
              </div>
              <div class="offset-xl-2 col-xl-5 col-lg-6">
                  <div class="tp-section mb-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="tp-section-title-wrapper">
                        <p>Empowering your business with our team of skilled developers and designers, 
                            utilizing the latest technologies to craft robust, scalable, and user-friendly software applications.</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="tp-feature-3-wrapper d-flex align-items-center justify-content-between">
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                        <a href="#lms-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-worldwide"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-step-item-title">Learning Management System (LMS)</h4>
                          <span>L</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                      style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                      <a href="#crm-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-consultant"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-step-item-title">Customer Relationship Management (CRM)</h4>
                          <span>C</span>
                        </div>
                      </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".4s" data-wow-delay=".4s" 
                        style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: bounceIn;">
                        <a href="#erp-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-data-visualization"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-step-item-title">Enterprise Resource Planning <br>(ERP)</h4>
                          <span>E</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                         style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                         <a href="#hrm-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-ux-design"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-step-item-title">Human Resource Management <br>(HRM)</h4>
                          <span>H</span>
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
                  <div class="col-lg-6" id="lms-section">
                      <div class="tp-services-details-wrapper">
                      <h4 class="tp-services-details-title">Learning Management System (LMS)</h4>
                      <p>
                          Embark on an educational revolution with our Learning Management System (LMS), meticulously 
                          designed to transform the learning experience. Our LMS goes beyond seamless program delivery, 
                          offering advanced features for comprehensive content management, real-time progress tracking, 
                          and interactive engagement. Whether you're an educational institution or a corporate entity, 
                          our LMS empowers you to create, deliver, and monitor educational content efficiently, fostering 
                          a dynamic and personalized learning environment.
                      </p>                      `
                      <div class="tp-services-details-check d-flex align-items-center mt-50">
                          <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                              <i class="fa-light fa-check"></i>
                              <span>Effortless management of educational programs.</span>
                            </div>
                            <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                <i class="fa-light fa-check"></i>
                                <span>Enhanced tracking for educational success.</span>
                            </div>
                      </div>
                      </div>
                  </div>
                  <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                      <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/management-thumb-3.jpg') }}" alt="">
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
                            <h4 class="tp-services-details-faq-title">Client Satisfaction</h4>
                            <span>Our primary goal is to exceed client expectations</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                        <div class="tp-services-details-faq-item-icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="tp-services-details-faq-item-content">
                            <h4 class="tp-services-details-faq-title">Expertise</h4>
                            <span>We bring years of industry expertise to every project</span>
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
                          <img src="{{ asset('assets/img/thumbs/management-thumb-4.jpg') }}" alt="">
                      </div>
                      <div class="tp-management-shape-1">
                          <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 text-end" id="crm-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Customer Relationship Management (CRM)</h4>
                    <p>
                      Elevate your customer relations with our Customer Relationship Management (CRM) solution, 
                      a strategic tool for businesses aiming to build lasting connections. Our CRM is more than a
                        data management system; it's a dynamic platform that centralizes customer interactions, 
                        providing a 360-degree view of relationships. From lead management to personalized communication
                        and analytics, our CRM empowers your team to deliver exceptional customer experiences.  
                    </p>                      `
                    <div class="tp-services-details-check d-flex align-items-center mt-50">
                        <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Efficiently manage and optimize customer relationships.</span>
                          </div>
                          <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                              <i class="fa-light fa-check"></i>
                              <span>Drive business growth with strategic CRM tools.</span>
                          </div>
                    </div>
                    </div>
                </div>   
            </div>
              <div class="row mb-70">
                <div class="col-lg-6" id="erp-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Enterprise Resource Planning (ERP)</h4>
                    <p>
                      Revolutionize your business operations with our Enterprise Resource Planning (ERP) solution, 
                      a comprehensive suite of tools to streamline processes, enhance collaboration, and optimize resources.
                        Our ERP spans across finance, human resources, supply chain, and beyond, integrating disparate systems into 
                        a cohesive and efficient ecosystem. From real-time analytics to automated workflows, our ERP empowers 
                        organizations to make informed decisions and adapt to evolving market dynamics. 
                  </p>
                                        `
                    <div class="tp-services-details-check d-flex align-items-center mt-50">
                      <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Efficiently streamline business processes.</span>
                            </div>
                            <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Optimize resource utilization with integrated systems.</span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                      <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp mt-50"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/management-thumb-5.jpg') }}" alt="">
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
                            <img src="{{ asset('assets/img/thumbs/management-thumb-6.jpg') }}" alt="">
                          </div>
                          <div class="tp-management-shape-1">
                            <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                          </div>
                      </div>
                  </div>
                    <div class="col-lg-6" id="hrm-section">
                      <div class="tp-services-details-wrapper">
                          <h4 class="tp-services-details-title">Human Resource Management (HRM)</h4>
                          <p>
                            Navigate the complexities of Human Resource Management (HRM) with our solution tailored for 
                            the modern workplace. Our HRM system is more than just personnel management; it's a strategic 
                            tool to attract, develop, and retain top talent. From recruitment and performance management
                            to employee development and analytics, our HRM solution supports a holistic approach to workforce 
                            optimization.  
                          </p>
                                            `
                          <div class="tp-services-details-check d-flex align-items-center mt-50">
                            <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Optimize human resource management for workplace success.</span>
                                </div>
                                <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Foster employee growth and enhance workplace dynamics.</span>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        <!-- sercices-area-end -->
    <div>

@endsection
