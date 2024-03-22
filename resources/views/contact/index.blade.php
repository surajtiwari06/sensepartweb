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
                      <div class="breadcrumb-link mb-15">                         
                        <span>Contact Us</span>
                      </div>
                      <h2 class="breadcrumb-title">Get in Touch</h2>
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

        <!-- contact-area-start -->
        <section class="contact-area pt-115 pb-80">
            <div class="container">
                <div class="row">
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
