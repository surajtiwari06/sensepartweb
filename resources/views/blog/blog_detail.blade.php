@extends('layouts.app', ['ignore_loader' => true])
@section('content')

  <div class="page-content">
    <!-- breadcrumb-area-start -->
    <section class="blog-area blog-wrap">
        <div class="blog-bg" style="background-image: url({{ $post->hero }});  opacity: 0.55;"></div>
        <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-12 mx-auto">
                <div class="tpblog">
                    <div class="blog-link mb-15 ">
                        <h1 class="display-1 mb-4 blog-title text-dark">{{$post->title}}</h1>
                        <ul class="post-meta blog-item-active">
                          <div class="post-date">
                            <i class="uil-calendar-alt ms-2"></i>
                            <span class="text-dark"> {{ $post->created_at->format('F d, Y') }}</span>
                          </div>
                          <div class="post-author">
                            <i class="uil-user ms-2"></i>
                            <span class="text-dark"> By  {{ $post->author_name->name }}</span>
                          </div>
                        </ul>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- postbox area -->
    <section class="postbox__area pt-145 pb-105">
      <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-7">
              <div class="postbox-main-wrapper mb-35 pr-30">
                  <div class="postbox-meta-wrapper">
                    <article class="postbox-item mb-50 transition-3">
                      <div class="post-content mb-5">
                          <h1 class="text-dark mb-4">{{$post->title}}</h1>
                          <div>
                            {!! $post->body !!}
                          </div>           
                      </div>
                    </article>
                  </div>
                  <div class="postbox-meta-wrapper">

                  </div>
              </div>
            </div>

          <!-- aside -->
          <aside class="col-lg-4 sidebar mt-11 mt-lg-6">         
              <div class="widget">
                <h4 class="widget-title mb-3">About Us</h4>
                <p>We partner in providing technical and non-technical expertise. Our engagement models are designed to 
                    accelerate the process to shorten the product development life cycle.</p>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-wrapper">
                  <div class="sidebar-widget sidebar-widget-2 mb-30">
                      <h3 class="sidebar-widget-title">Our Latest Post</h3>
                      <div class="sidebar-widget-content">
                        <div class="sidebar-post rc-post">
                          @foreach ($recentposts as $recentpost)
                          <a href="{{ route('posts.show', ['post' => $recentpost]) }}">
                          <div class="rc-post mb-20 d-flex align-items-center">
                             <div class="rc-post-thumb">
                                <figure class="rc-post-thumb">
                                   <a href="{{ route('posts.show', ['post' => $recentpost]) }}"><img src="{{ $recentpost->hero }}" alt="" /></a>                                         
                                 </figure>
                             </div>
                             <div class="rc-post-content">
                                <h6 class="rc-post-title mb-2">
                                   <a class="link-dark" href="{{ route('posts.show', ['post' => $recentpost]) }}">{{ $recentpost->title }}</a> <br>                                  
                                </h6>
                                <div class="post-date text-muted">{{ $recentpost->created_at->format('F d, Y') }}</div>
                             </div>
                          </div>
                       </a>
                       @endforeach
                      </div>
                  </div>
                </div>
            </div>             
          </aside>
        </div>
      </div>
    </section>
    <!-- postbox area end -->
  </div>

   @endsection