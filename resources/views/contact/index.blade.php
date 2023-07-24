@extends('layouts.app')
@section('content')
    <!-- CONTENT START -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="assets/img/green_image_11zon.jpg" style="background-image: url(&quot;assets/img/photos/bg3.jpg&quot;);"> 
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
          <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
              <h1 class="display-1 mb-3" style="color: azure;">Get in Touch</h1>
              <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" style="color: azure;">Home & Contact</a></li>
                  <!-- <li class="breadcrumb-item" style="color: azure;">and</a></li> -->
                  <!-- <li class="breadcrumb-item active" style="color: azure;" aria-current="page">Contact</li> -->
                </ol>
              </nav>
              <!-- /nav -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-10">
          <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
            <div class="col-lg-7 position-relative">
              <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
              <div class="row gx-md-5 gy-5">
                <div class="col-md-6">
                  <figure class="rounded mt-md-10 position-relative"><img src="assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-6">
                  <div class="row gx-md-5 gy-5">
                    <div class="col-md-12 order-md-2">
                      <figure class="rounded"><img src="assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-10">
                      <div class="card bg-pale-primary text-center counter-wrapper">
                        <!-- <div class="card-body py-11">
                          <h5 class="counter text-nowrap">Satisfied Customers many clients</h5>
                        </div> -->
                        <!--/.card-body -->
                      </div>
                      <!--/.card -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Address</h5>
                  <address>Sensepart, 304 3rd Floor, Atlantis, Opposite Vadodara central,<br class="d-none d-md-block" />VADODARA, GUJARAT, 390020</address>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Phone</h5>
                  <p><a href="tel:9265364235"> 9265364235</a></p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p><a href="mailto:info@sensepart.in">info@sensepart.in</a></p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
              <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
              <!-- TITLE END-->
              <form class="cons-contact-form" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name') }}" placeholder="Name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <input type="tel" name="phone" class="form-control"
                                value="{{ old('phone') }}" placeholder="Phone">
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
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <input type="text" name="subject" class="form-control"
                                value="{{ old('subject') }}" placeholder="Subject">
                            @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="button" class="site-button btn btn-primary rounded-pill btn-send mb-3 " onclick="submitForm()">Submit
                            Now</button>
                    </div>


                </div>
            </form>
            <script>
                function submitForm() {
                    // Disable the submit button to prevent multiple clicks
                    const submitButton = document.querySelector('.site-button');
                    submitButton.disabled = true;

                    // Get the form data
                    const formData = new FormData(document.querySelector('.cons-contact-form'));

                    // Make an AJAX request using Axios
                    axios.post('{{ route('contact.store') }}', formData)
                        .then(response => {
                            // Handle the success response
                            if (response.data.success) {
                                // Display success message (assuming you return a 'success' flag from your Laravel controller)
                                showAlert('alert-success', response.data.success);
                                // Reset the form after a successful submission
                                document.querySelector('.cons-contact-form').reset();
                            } else {
                                // Display error message (assuming you return an 'error' flag from your Laravel controller)
                                showAlert('alert-danger', response.data.error);
                            }
                        })
                        .catch(error => {
                            // Handle the error response
                            showAlert('alert-danger', 'An error occurred while submitting the form.');
                        })
                        .finally(() => {
                            // Re-enable the submit button after the AJAX request is completed
                            submitButton.disabled = false;
                        });
                }

                function showAlert(className, message) {
                    const alertDiv = document.createElement('div');
                    alertDiv.className = `alert ${className}`;
                    alertDiv.textContent = message;

                    const form = document.querySelector('.cons-contact-form');
                    form.parentNode.insertBefore(alertDiv, form);

                    // Automatically remove the alert after 5 seconds
                    setTimeout(() => {
                        alertDiv.remove();
                    }, 5000);
                }
            </script>
              
            </div>
            
          </div> 
          <!-- /.row -->
          
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
    <!-- CONTENT END -->
    
@endsection
