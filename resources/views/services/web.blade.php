@extends('layouts.app')
@section('content')


    <div class="page-content">
        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap mb-0">
          <div class="breadcrumb-bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg-1.jpg') }}"></div>
          <div class="container">
             <div class="row align-items-center">
                <div class="col-12">
                   <div class="tpbreadcrumb mb-15">
                      <h2 class="breadcrumb-title">Web Development</h2>
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
                    <h4 class="tp-section-title">Website Development</h4>
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
                        <a href="#landing-section">
                        <div class="tp-feature-3-item-icon">
                           <img src="{{ asset('assets/img/icon/landing-page.png') }}" alt="" style="width: 50px;">
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">Landing Page <br> Website</h4>
                          <span>L</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <a href="#multiple-section">
                        <div class="tp-feature-3-item-icon">
                           <img src="{{ asset('assets/img/icon/list.png') }}" alt="" style="width: 50px;">
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">Multiple Page <br> Website</h4>
                          <span>M</span>
                        </div>
                        </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".4s" data-wow-delay=".4s" 
                         style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: bounceIn;">
                         <a href="#dynamic-section">
                        <div class="tp-feature-3-item-icon">
                           <img src="{{ asset('assets/img/icon/dynamic.png') }}" alt="" style="width: 50px;">
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">Dynamic <br> Website</h4>
                          <span>D</span>
                        </div>
                         </a>
                    </div>
                    <div class="tp-feature-3-item text-center mb-60 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" 
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <a href="#e-com-section">
                        <div class="tp-feature-3-item-icon">
                           <img src="{{ asset('assets/img/icon/online-store.png') }}" alt="" style="width: 50px;">
                        </div>
                        <div class="tp-feature-3-item-content">
                          <h4 class="tp-feature-3-item-title">E-commerce <br> Website</h4>
                          <span>E</span>
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
                   <div class="col-lg-6" id="landing-section">
                       <div class="tp-services-details-wrapper">
                       <h4 class="tp-services-details-title">Landing Page Website</h4>
                       <p class="mt-30">
                          A compelling landing page is the virtual storefront of your service website, designed to captivate visitors instantly.
                          With minimalistic yet impactful content, a landing page focuses on a single call-to-action, driving conversions effectively.
                          Engaging visuals, concise copy, and strategic placement of elements ensure a seamless user experience.
                          Analytics integration enables tracking and optimizing performance for continuous improvement.
                          Tailored for a specific purpose, a landing page maximizes user engagement and encourages immediate action.
                      </p>        
                       <div class="tp-services-details-check d-flex align-items-center mt-50 mb-50">
                           <div class="tp-services-details-check-item d-flex align-items-center mb-0">
                               <i class="fa-light fa-check"></i>
                               <span>Single, impactful page.</span>
                             </div>
                             <div class="tp-services-details-check-item d-flex align-items-center ml-55 ">
                                 <i class="fa-light fa-check"></i>
                                 <span>Minimalistic design and focused content.</span>
                             </div>                            
                       </div>
                       </div>
                   </div>
                   <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                       <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/management-thumb-7.jpg') }}" alt="">
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
                             <h4 class="tp-services-details-faq-title">Quality Assurance</h4>
                             <span>We maintain rigorous quality standards throughout our processes</span>
                         </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                         <div class="tp-services-details-faq-item-icon">
                             <i class="flaticon-medal"></i>
                         </div>
                         <div class="tp-services-details-faq-item-content">
                             <h4 class="tp-services-details-faq-title">Continuous Improvement</h4>
                             <span>We continually strive for improvement and innovation in our services</span>
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
                          <img src="{{ asset('assets/img/thumbs/management-thumb-9.jpg') }}" alt="">
                       </div>
                       <div class="tp-management-shape-1">
                          <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 text-end" id="multiple-section">
                     <div class="tp-services-details-wrapper">
                       <h4 class="tp-services-details-title">Multiple Page Website</h4>
                       <p>
                          A comprehensive service website unfolds its offerings across multiple pages, providing in-depth information.
                          Each page is strategically organized, ensuring easy navigation and a user-friendly experience.
                          Content is distributed logically, offering detailed insights into different aspects of your services.
                          Interconnected pages create a cohesive narrative, guiding visitors through a journey of exploration.
                          SEO-friendly structure enhances visibility, ensuring your service website is easily discoverable on search engines.  
                       </p>                      
                       <div class="tp-services-details-check d-flex align-items-center mt-50 mb-50">
                          <div class="tp-services-details-check-item d-flex align-items-center mb-0">
                             <i class="fa-light fa-check"></i>
                             <span>Comprehensive information across multiple pages.</span>
                          </div>
                          <div class="tp-services-details-check-item d-flex align-items-center ml-55 ">
                                <i class="fa-light fa-check"></i>
                                <span>Logical organization for easy navigation.</span>
                          </div>                            
                    </div>
                   </div>
                </div>
             </div>             
              <div class="row mb-70">
                 <div class="col-lg-6" id="dynamic-section">
                    <div class="tp-services-details-wrapper">
                    <h4 class="tp-services-details-title">Dynamic Website</h4>
                    <p>
                       A dynamic service website adapts and responds to user interactions, delivering personalized content in real-time.
                       Database-driven, dynamic websites allow for seamless updates and modifications without extensive manual intervention.
                       Interactive features such as forms, chatbots, and dynamic content keep visitors engaged and enhance user satisfaction.
                       Regularly updated information ensures relevancy, establishing your service website as a reliable source.
                       Responsive design and dynamic functionality cater to diverse user devices and preferences. 
                   </p>                                        
                   <div class="tp-services-details-check d-flex align-items-center mt-50 mb-50">
                    <div class="tp-services-details-check-item d-flex align-items-center mb-0">
                        <i class="fa-light fa-check"></i>
                        <span>Real-time adaptation to user interactions.</span>                                               
                      </div>
                      <div class="tp-services-details-check-item d-flex align-items-center ml-55 ">
                          <i class="fa-light fa-check"></i>
                          <span> Database-driven for seamless updates.</span>
                      </div>                            
                   </div>
                    </div>
                 </div>
                 <div class="col-lg-6">                      
                    <div class="tp-management-thumb-wrap p-relative">
                       <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp mt-70"
                          data-wow-duration="1s" data-wow-delay=".4s">
                          <div class="tp-thumb-common-overlay wow"></div>
                          <img src="{{ asset('assets/img/thumbs/management-thumb-8.jpg') }}" alt="">
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
                             <img src="{{ asset('assets/img/thumbs/management-thumb-10.jpg') }}" alt="">
                          </div>
                          <div class="tp-management-shape-1">
                             <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                          </div>
                      </div>
                   </div>
                    <div class="col-lg-6" id="e-com-section">
                       <div class="tp-services-details-wrapper">
                          <h4 class="tp-services-details-title">E-commerce Website</h4>
                          <p>
                             An e-commerce service website facilitates online transactions, providing a secure platform for buying and selling.
                             Product pages showcase offerings with detailed descriptions, images, and user reviews for informed decision-making.
                             Secure payment gateways ensure a trustworthy and seamless checkout process, fostering customer confidence.
                             Inventory management and order tracking streamline backend operations, optimizing the overall shopping experience.
                             Integration with marketing tools and analytics allows for targeted promotions and continuous performance analysis.  
                          </p>
                          <div class="tp-services-details-check d-flex align-items-center mt-50 mb-50">
                             <div class="tp-services-details-check-item d-flex align-items-center mb-0">
                                 <i class="fa-light fa-check"></i>
                                 <span>Secure platform for online transactions.</span>
                               </div>
                               <div class="tp-services-details-check-item d-flex align-items-center ml-55 ">
                                   <i class="fa-light fa-check"></i>
                                   <span>Detailed product pages with reviews.</span>
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
