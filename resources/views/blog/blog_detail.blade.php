@extends('layouts.app')
@section('content')

     <!-- CONTENT START -->
     <section class="wrapper image-wrapper bg-image bg-overlay text-white" style="background-image: url({{ $post->hero }});  opacity: 0.95;"> 
        <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
          <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
              <div class="post-header">
              
                <!-- /.post-category -->
                <h1 class="display-1 mb-4 text-white">{{$post->title}}</h1>
                <ul class="post-meta text-white">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at->format('F d, Y') }}</span></li>
                  <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>By {{ $post->author_name->name }}</span></a></li>
                  {{-- <li class="post-comments"><i class="uil uil-comment"></i><a href="#" class="text-reset">3<span> Comments</span></a></li>
                  <li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> Likes</span></a></li> --}}
                </ul>
                <!-- /.post-meta -->
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <div class="row gx-lg-8 gx-xl-12">
             <div class="col-lg-8">
              <div class="blog single">
                <div class="card">
                  {{-- <figure class="card-img-top"><img src="{{ $post->hero }}" alt="" /></figure> --}}
                  <div class="card-body">
                    <div class="classic-view">
                      <article class="post">
                        <div class="post-content mb-5">
                          <h2 class="h1 mb-4">{{$post->title}}</h2>
                         <div>
                          {!! $post->body !!}
                         </div>
            
                         </div>
                        <!-- /.post-content -->
                       
                      </article>
                      <!-- /.post -->
                    </div>
                    <!-- /.classic-view -->
                 
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.blog -->
             </div>
              <!-- /column -->
             <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
          
              <div class="widget">
                <h4 class="widget-title mb-3">About Us</h4>
                <p>We partner in providing technical and non-technical expertise. Our engagement models are designed to accelerate the process to shorten the product development life cycle.</p>
                <nav class="nav social">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                  <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!-- /.widget -->
              <div class="widget">
                <h4 class="widget-title mb-3">Recent Popular Posts</h4>
                <ul class="image-list">
                  @foreach ($recentposts as $recentpost)
                  <a href="{{ route('posts.show', ['post' => $recentpost]) }}">
                  <li>
                    <figure class="rounded"><a href="{{ route('posts.show', ['post' => $recentpost]) }}"><img src="{{ $recentpost->hero }}" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="mb-2"> <a class="link-dark" href="{{ route('posts.show', ['post' => $recentpost]) }}">{{ $recentpost->title }}</a> </h6>
                      <ul class="post-meta">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $recentpost->created_at->format('F d, Y') }}</span></li>
                        {{-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li> --}}
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                  </li>
                </a>
                  @endforeach
                </ul>
                <!-- /.image-list -->
              </div>
              <!-- /.widget -->
             
            </aside>
            <!-- /column .sidebar -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
    <!-- CONTENT END -->

   @endsection