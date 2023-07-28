@extends('layouts.app')
@section('content')
    <!-- CONTENT START -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-5  pt-md-14 pb-3 text-center">
          <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
              <h1 class="display-1 mb-3">Blog </h1>
              <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company news and business articles.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
 </section>
      <!-- /section -->
      <section class="wrapper bg-soft-primary">
        <div class="container pb-14 pb-md-16">
          <div class="row">
            <div class="col-lg-12 mx-auto">
            
              <!-- /.blog -->
              <div class="blog grid grid-view">
                <div class="row isotope gx-3 gy-2 mb-8">
                    @foreach ($posts as $post)
                  <article class="item post col-4">
                    <div class="card">
                        
                        <figure class="card-img-top overlay overlay-1 hover-scale">
                            @if ($post->hero)
                            <a href="{{ route('posts.show', ['post' => $post]) }}">
                                <img src="{{ $post->hero }}" alt="">
                            </a>
                            @endif
                           
                            <figcaption>
                    
                      
                            <a href="{{ route('posts.show', ['post' => $post]) }}" class="from-top mb-0" >  
                               <h5 class="from-top mb-0">Read More</h5>
                            </a>
                        
                        </figcaption>
                      </figure>
               
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                           
                            <a href="{{ route('posts.show', ['post' => $post]) }}" class="hover" rel="category"><span class="text-dark">By </span>{{ $post->author_name->name }}</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p> {{ Illuminate\Support\Str::limit($post->description, $limit = 70, $end = '...') }}</p>
                        
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at->format('F d, Y') }}</span></li>
                          <li class="post-likes ms-auto">  <a href="{{ route('posts.show', ['post' => $post]) }}"
                            class="site-button-link site-text-primary">Read More</a></li>
                          {{-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                          <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li> --}}
                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  @endforeach
                  <!-- /.post -->
                 
                </div>
                <!-- /.row -->
              </div>
              <!-- /.blog -->
              <nav class="d-flex" aria-label="pagination">
                <ul class="pagination">
                    <li class="page-item {{ ($posts->currentPage() == 1) ? 'disabled' : '' }}">
                        @if ($posts->previousPageUrl())
                            <a class="page-link" href="{{ $posts->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        @else
                            <span class="page-link" aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
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
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        @else
                            <span class="page-link" aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        @endif
                    </li>
                </ul>
                <!-- /.pagination -->
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
    <!-- CONTENT END -->
@endsection
