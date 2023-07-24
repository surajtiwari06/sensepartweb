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
                            <h2 class="wt-title">Blog</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->


        <!-- OUR BLOG START -->
        <div class="section-full p-t120 p-b90 site-bg-white">
            <div class="container">
                <div class="row d-flex">
                    @foreach ($posts as $post)
                        <div class="masonry-item col-lg-4 col-md-12">
                            <div class="blog-post twm-blog-post-1-outer">
                                <div class="wt-post-media">
                                    @if ($post->hero)
                                        <a href="{{ route('posts.show', ['post' => $post]) }}">
                                            <img src="{{ $post->hero }}" alt="">
                                        </a>
                                    @endif
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-meta">
                                        <ul>
                                            <li class="post-date">{{ $post->created_at->format('F d, Y') }}</li>
                                            <li class="post-author">By <a
                                                    href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->author_name->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title">
                                        <h4 class="post-title">
                                            <a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                                        </h4>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>
                                            {{ Illuminate\Support\Str::limit($post->description, $limit = 70, $end = '...') }}

                                        </p>
                                    </div>
                                    <div class="wt-post-readmore">
                                        <a href="{{ route('posts.show', ['post' => $post]) }}"
                                            class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="pagination-outer">
                    <div class="pagination-style1">
                        <ul class="clearfix">
                            <li class="prev">
                                @if ($posts->previousPageUrl())
                                    <a href="{{ $posts->previousPageUrl() }}"><span><i
                                                class="fa fa-angle-left"></i></span></a>
                                @endif
                            </li>
                            @for ($page = 1; $page <= $posts->lastPage(); $page++)
                                @if ($page == $posts->currentPage())
                                    <li class="active"><a href=" ">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $posts->url($page) }}">{{ $page }}</a></li>
                                @endif
                            @endfor
                            <li class="next">
                                @if ($posts->nextPageUrl())
                                    <a href="{{ $posts->nextPageUrl() }}"><span><i
                                                class="fa fa-angle-right"></i></span></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->




    </div>
    <!-- CONTENT END -->
@endsection
