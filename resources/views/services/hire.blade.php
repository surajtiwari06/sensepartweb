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
                            <h2 class="breadcrumb-title">Hire our Developer</h2>
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

            <!-- about-area-start -->
            <section class="about-area tp-about-two pt-200 pb-60">
                <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-about-two-wrap mb-60 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-about-two-thumb ">
                            <img src="{{ asset('assets/img/about/two/Programming-amico.png') }}" alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-about-two-wrapper mb-60 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-section tp-section-two mb-40"> 
                            <h4 class="tp-section-title">Hire Our Dedicated Resources<br>Now At Affordable Cost</h4>
                            <div class="tp-section-title-wrapper">
                                <p>System is a term used to refer to an organized collection symbols and processes that may
                                    be used to operate on such symbols. Perspiciatis <br> omnis natus error voupems accusa
                                </p>
                            </div>
                            </div>
                            <div class="tp-about-two-list">
                            <ul>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Flexibility</li>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Cost-Effective</li>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Time-Saving</li>
                                <li><span><img src="{{ asset('assets/img/icon/check-mark.png') }}" alt="" style="width: 30px;"></span>Project Control</li>                              
                            </ul>
                            </div>
                            <div class="tp-about-details d-flex align-items-center flex-wrap">
                            <div class="tp-about-btn mr-30">
                                <a class="tp-btn" href="#contact-section">Get Solutions</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tp-about-two-shape">
                <div class="tp-about-two-shape-4">
                    <img src="{{ asset('assets/img/about/two/about-2-shape-2.png') }}" alt="">
                </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- feature-area-start -->
            <section class="feature-area pt-120 pb-90 p-relative feature-inner-bg"
                data-background="{{ asset('assets/img/feature/inner/feature-inner-bg-1.jpg') }}">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-feature-item mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-feature-icon">
                            <i class="flaticon-solution-1"></i>
                            </div>
                            <div class="tp-feature-content">
                            <h4 class="tp-feature-content-title">Best Business <br> Solution</h4>
                            <p>We offers a full-cycle development services that meet business </p>
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
                            <h4 class="tp-feature-content-title">Business Growth <br> Planning</h4>
                            <p>We offers a full-cycle development services that meet business </p>
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
                            <h4 class="tp-feature-content-title">Search Engine <br> Optimization</h4>
                            <p>We offers a full-cycle development services that meet business </p>
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

            <!-- Offering-area-start -->
            <section class="offering-area tp-offer-bg pb-80 pt-120" data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}">
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
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ url('web') }}">Web <br> Development</a></h4>
                            <p>Explore cutting-edge web development solutions.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                            <a href="{{ url('web') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s">
                            <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/coding.png') }}" alt="" style="width: 50px;">
                            </div>
                            <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ url('software') }}">Software Development</a></h4>
                            <p>Discover advanced software solutions.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                            <a href="{{ url('software') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s">
                            <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/ai.png') }}" alt="" style="width: 50px;">
                            </div>
                            <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ url('ai_ml') }}">Artificial <br> Intelligence</a></h4>
                            <p>Unlock the potential of artificial intelligence and machine learning.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                            <a href="{{ url('ai_ml') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                            <img src="{{ asset('assets/img/icon/iot.png') }}" alt="" style="width: 50px;">
                            </div>
                            <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a href="{{ url('iot') }}">Internet <br> Of Things</a></h4>
                            <p>Connect and optimize with our seamless IOT solutions.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                            <a href="{{ url('iot') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- Offering-area-end -->           

            <!-- contact-area-start -->
            <section class="contact-area pt-115 pb-80">
                <div class="container">
                    <div class="row" id="contact-section">
                        <div class="col-xl-5 col-lg-6">
                            <div class="tp-contact-main mb-40">
                                <div class="tp-section tp-section-two mb-25">
                                    <span class="tp-section-sub-title"><i class="flaticon-edit"></i>Connect With Us</span>
                                    <h4 class="tp-section-title">Drop Us a Message</h4>
                                    <h4 class="">Optimize Growth with Our Expertise. </h4>
                                    <div class="tp-section-title-wrapper">
                                        <p>Empower your business with innovative solutions. Our dedicated team is ready to assist you in achieving sustainable growth. <br>
                                        Let's start a conversation today!!</p>
                                    </div>
                                </div>
                                <div class="tp-contact-main-thumb mb-40 w-img">
                                    <img src="{{ asset('assets/img/thumbs/contact-main-bg-1.jpg') }}" alt="">
                                </div>
                                <div class="tp-contact-location ">
                                    <div class="">
                                        <a href="#"><i class="fa-light fa-location-dot"></i>  304 3rd Floor, Atlantis, Opposite Vadodara central,<br> VADODARA, GUJARAT, 390020</a>
                                        <a href="{{ asset('tel:9265364235') }}"><i class="fa-light fa-phone"></i>+9265364235</a>
                                        <a href="{{ asset('mailto:info@sensepart.in') }}"><i class="fa-solid fa-envelope"></i>info@sensepart.in</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="offset-xl-1 col-xl-6 col-lg-6">
                            <div class="tp-contact-details-form mb-40">
                                <form id="contactForm" class="cons-contact-form" method="POST" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">                                  
                                            <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Name">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="Email Address">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="tel" name="phone" class="form-control"
                                                value="{{ old('phone') }}" placeholder="Phone Number">
                                                @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <style>
                                                    input::-webkit-outer-spin-button,
                                                    input::-webkit-inner-spin-button {
                                                        display: none;
                                                    }

                                                    input[type=number] {
                                                        -moz-appearance: textfield;
                                                    }
                                                </style>
                                            <span><i class="fa-light fa-phone"></i></span>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="subject" class="form-control"
                                                value="{{ old('subject') }}" placeholder="Your Subject">
                                                @error('subject')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            <span><i class="fa-sharp fa-light fa-circle-info"></i></span>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <textarea name="message" class="form-control" placeholder="Write Your Message">
                                                {{ old('message') }}</textarea>
                                                @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            <span><i class="fa-light fa-pen"></i></span>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="tp-contact-details-form-btn">
                                            <button type="submit" class="tp-btn btn-send mb-3" onclick="submitForm()">
                                                Send a Message</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.getElementById('contactForm').addEventListener('submit', function (event) {
                        event.preventDefault();
                
                        const submitButton = document.querySelector('.btn-send');
                        submitButton.disabled = true;
                
                        const formData = new FormData(this);
                
                        axios.post(this.action, formData)
                            .then(response => {
                                if (response.data.success) {
                                    showAlert('alert-success', response.data.success);
                                    document.getElementById('contactForm').reset();
                                } else {
                                    showAlert('alert-danger', response.data.error);
                                }
                            })
                            .catch(error => {
                                showAlert('alert-danger', 'An error occurred while submitting the form.');
                            })
                            .finally(() => {
                                submitButton.disabled = false;
                            });
                    });
                
                    function showAlert(className, message) {
                        const alertDiv = document.createElement('div');
                        alertDiv.className = `alert ${className}`;
                        alertDiv.textContent = message;
                
                        const form = document.getElementById('contactForm');
                        form.parentNode.insertBefore(alertDiv, form);
                
                        setTimeout(() => {
                            alertDiv.remove();
                        }, 5000);
                    }
                </script>
            </section>
            <!-- contact-area-end -->

        </div>

@endsection
