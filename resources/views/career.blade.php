@extends('layouts.app')
@section('content')

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">The Most Exciting Jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Jobs Grid</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


          <!-- iframe from old website strat -->

          <iframe id="careers_api_source" width="100%" height="1961.099099px" iframeborder="0" style="border: none; margin: 0px; min-height: 1941.1px;" src="https://jobsapi.ceipal.com/APISource/v4/index.html?bgcolor=000000&amp;api_key=UEVNbW9ZUUxUYUVramtuNVUrZEFFQT09&amp;cp_id=Z3RkUkt2OXZJVld2MjFpOVRSTXoxZz09" data-dashlane-frameid="668"></iframe>
          <!-- iframe from old website end -->
          
            
     
        </div>
        <!-- CONTENT END -->

       

   @endsection