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
                        <h2 class="breadcrumb-title">Blog</h2>
                    </div>
                  </div>
              </div>
            </div>
            <div class="breadcrumb-shape">
              <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                  <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
              </div>
              <div class="breadcrumb-shape-4 wow slideInRight" data-wow-duration="1.2s" data-wow-delay=".1s">
                  <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
              </div>
              <div class="breadcrumb-shape-5 wow slideInRight" data-wow-duration="1.4s" data-wow-delay=".3s">
                  <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
              </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <section class="blog-area tp-blog-inner pt-80 pb-120 mb-10">
          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="tp-blog-two mb-30">
                      <div class="tp-blog-two-item ">
                        <div class="row">
                            @foreach ($posts as $post)
                              <article class="item post col-4">
                                <div class="card mb-50">
                                    <figure class="card-img-top tp-blog-two-thumb overlay-anim tp-thumb-common fix ">
                                        <div class="tp-thumb-common-overlay wow"></div>
                                      @if ($post->hero)
                                        <a href="{{ route('posts.show', ['post' => $post]) }}">
                                            <img src="{{ $post->hero }}" alt="">
                                            <div class="tp-blog-two-thumb-plus">
                                              <i class="fa-regular fa-plus"></i>
                                          </div>
                                        </a>
                                      @endif                     
                                  </figure>
                                    <div class="card-body">
                                      <div class="post-header">
                                        <div class="post-category text-line">                        
                                          <a href="{{ route('posts.show', ['post' => $post]) }}" class="hover" rel="category"><span class="text-dark">By </span>{{ $post->author_name->name }}</a>
                                        </div>
                                        <h2 class="tp-blog-two-title mt-1 mb-3">
                                          <a class="link-dark" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                                        </h2>
                                      </div>
                                      <div class="post-content">
                                        <p> {{ Illuminate\Support\Str::limit($post->description, $limit = 70, $end = '...') }}</p>                     
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <ul class="post-meta d-flex mb-0">                        
                                        <span class="post-date"><i class="uil uil-calendar-alt">
                                          </i><span>{{ $post->created_at->format('F d, Y') }}</span>
                                        </span>
                                          <span class="ms-auto">
                                            <a href="{{ route('posts.show', ['post' => $post]) }}" class="tp-blog-two-btn">Read More</a>
                                          </span>                                        
                                      </ul>                      
                                    </div>
                                </div>
                              </article>
                          @endforeach
                        </div>
                      </div>
                  </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-12">
                  <div class="basic-pagination text-center mt-20">
                      <nav>
                        <ul>
                            <li class="page-item {{ ($posts->currentPage() == 1) ? 'disabled' : '' }}">
                                    @if ($posts->previousPageUrl())
                                        <a class="page-link" href="{{ $posts->previousPageUrl() }}" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa-light fa-arrow-left-long"></i></span>
                                        </a>
                                    @else
                                        <span class="page-link" aria-hidden="true"><i class="fa-light fa-arrow-left-long"></i></span>
                                    @endif
                                </li>
                                @for ($page = 1; $page <= $posts->lastPage(); $page++)
                                    <li class="page-item {{ ($page == $posts->currentPage()) ? 'active' : '' }}">
                                        @if ($page == $posts->currentPage())
                                            <span class="page-link">{{ $page }}</span>
                                        @else
                                            <a class="page-link" href="{{ $posts->url($page) }}">{{ $page }}</a>
                                        @endif
                                    </li>
                                @endfor
                                <li class="page-item {{ ($posts->currentPage() == $posts->lastPage()) ? 'disabled' : '' }}">
                                    @if ($posts->nextPageUrl())
                                        <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa-light fa-arrow-right-long"></i></span>
                                        </a>
                                    @else
                                        <span class="page-link" aria-hidden="true"><i class="fa-light fa-arrow-right-long"></i></span>
                                    @endif
                                </li>
                        </ul>
                      </nav>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!-- blog-area-end --> 
    </div>

@endsection
