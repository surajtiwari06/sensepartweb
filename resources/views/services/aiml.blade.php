@extends('layouts.app')
@section('content')


    <div class="page-content">

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
          <div class="breadcrumb-bg" style="background-image: url('{{ asset('assets/img/slider/slider-3-thumb-2.jpg') }}');"></div>
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                  <div class="tpbreadcrumb mb-15">
                      <h2 class="breadcrumb-title">AI and ML</h2>
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
                    <h4 class="tp-section-title">AI and ML Services</h4>
                  </div>
              </div>
              <div class="offset-xl-2 col-xl-5 col-lg-6">
                  <div class="tp-section mb-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="tp-section-title-wrapper">
                        <p>Empower your organization with the transformative capabilities of Artificial Intelligence (AI) 
                          and Machine Learning (ML) through our comprehensive suite of services across various domains, driving innovation,
                           efficiency, and decision-making.. </p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="tp-feature-3-wrapper d-flex align-items-center justify-content-between">
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s" 
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                        <a href="#predictive-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-worldwide"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">AI-Powered Predictive Analytics</h4>
                          <span>A</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <a href="#nlp-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-consultant"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">Natural Language Processing (NLP)</h4>
                          <span>N</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".4s" data-wow-delay=".4s" 
                        style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: bounceIn;">
                        <a href="#vision-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-data-visualization"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">Computer Vision Applications</h4>
                          <span>C</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <a href="#chain-section">
                        <div class="tp-feature-3-item-icon">
                          <i class="flaticon-ux-design"></i>
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">AI-Powered Supply Chain Optimization</h4>
                          <span>u</span>
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
                  <div class="col-lg-6" id="predictive-section">
                      <div class="tp-services-details-wrapper">
                      <h4 class="tp-services-details-title">AI-Powered Predictive Analytics</h4>
                      <p>
                        Gain a strategic edge with our AI-powered predictive analytics solutions, which harness
                         the latest advancements in machine learning algorithms to unlock actionable insights from 
                         your data. Whether it's forecasting market trends, optimizing resource allocation, or 
                         identifying potential risks, our predictive analytics services enable you to make 
                         informed decisions with confidence.
                      </p>                      
                      <div class="tp-services-details-check d-flex align-items-center mt-50">
                          <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                              <i class="fa-light fa-check"></i>
                              <span>Fine-tuned models that adapt to changing data patterns.</span>
                            </div>
                            <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                <i class="fa-light fa-check"></i>
                                <span>Automated anomaly detection to mitigate risks in real-time.</span>
                            </div>
                      </div>
                      </div>
                  </div>
                  <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                      <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/Powered Predictive.jpg') }}" alt="">
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
                            <h4 class="tp-services-details-faq-title">Why Choose Our Services?</h4>
                            <span>We prioritize excellence in service delivery</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                        <div class="tp-services-details-faq-item-icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="tp-services-details-faq-item-content">
                            <h4 class="tp-services-details-faq-title">Our Commitment</h4>
                            <span>We are dedicated to providing top-notch solutions</span>
                        </div>
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
                          <img src="{{ asset('assets/img/thumbs/NPL.jpg') }}" alt="">
                      </div>
                      <div class="tp-management-shape-1">
                          <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 text-end" id="nlp-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Natural Language Processing (NLP)</h4>
                    <p>
                      Revolutionize the way you interact with textual data using our advanced NLP solutions.
                      Our expertise in natural language processing enables us to develop sophisticated algorithms 
                      that understand, interpret, and generate human-like text, facilitating a wide range of 
                      applications such as chatbots, sentiment analysis, and document summarization.
                    </p>                      
                    <div class="tp-services-details-check d-flex align-items-center mt-50">
                        <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Multilingual support for analyzing text in multiple languages.</span>
                          </div>
                          <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                              <i class="fa-light fa-check"></i>
                              <span>Named entity recognition for extracting key information.</span>
                          </div>
                    </div>
                    </div>
                </div>   
            </div>
              <div class="row mb-70">
                <div class="col-lg-6" id="vision-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Computer Vision Applications</h4>
                    <p>
                      See the world through a new lens with our computer vision applications that enable 
                      machines to interpret and understand visual content. From object detection to image
                       segmentation, our computer vision solutions leverage deep learning techniques to 
                       extract meaningful information from images and videos, empowering industries such
                      as retail, healthcare, and autonomous vehicles.
                  </p>
                    <div class="tp-services-details-check d-flex align-items-center mt-50">
                      <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                            <i class="fa-light fa-check"></i>
                            <span>Semantic segmentation for pixel-level understanding of images.</span>
                            </div>
                            <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Integration with devices for real-time visual data analysis.</span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                      <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/Computer Vision.jpg') }}" alt="">
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
                            <img src="{{ asset('assets/img/thumbs/Supply Chain.jpg') }}" alt="">
                          </div>
                          <div class="tp-management-shape-1">
                            <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                          </div>
                      </div>
                  </div>
                    <div class="col-lg-6" id="chain-section">
                      <div class="tp-services-details-wrapper">
                          <h4 class="tp-services-details-title">AI-Powered Supply Chain Optimization</h4>
                          <p>
                            Revolutionize your supply chain operations with our AI-powered optimization solutions.
                            By leveraging machine learning algorithms and predictive analytics, our services enable 
                            dynamic forecasting, demand planning, and inventory optimization. From reducing stockouts
                            and overstock situations to optimizing transportation routes and warehouse management,
                            our supply chain optimization solutions drive efficiency, resilience, and cost savings across the entire supply chain network.
                          </p>
                          <div class="tp-services-details-check d-flex align-items-center mt-50">
                            <div class="tp-services-details-check-item d-flex align-items-center mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Real-time visibility into data for proactive decision-making.</span>
                                </div>
                                <div class="tp-services-details-check-item d-flex align-items-center ml-55 mb-55">
                                  <i class="fa-light fa-check"></i>
                                  <span>Integration with sensors and blockchain technology for enhanced traceability.</span>
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
