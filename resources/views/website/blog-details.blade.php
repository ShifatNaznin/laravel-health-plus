@extends('layouts.website')

@section('content')

<div class="offcanvas-overlay"></div>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop Category Area End -->
<div class="shop-category-area single-blog-page mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog-posts ">
                    <div class="single-blog-post blog-grid-post">
                        <div class="blog-post-media">
                            <div class="blog-image single-blog">
                                <img src="{{ asset('/images/'.$data->image) }}"
                                    alt="blog" />
                            </div>
                        </div>
                        <div class="blog-post-content-inner mt-30px">
                            <h4 class="blog-title"><a href="#">{{$data->heading}}</a></h4>
                            <ul class="blog-page-meta">
                                <li>
                                    <a href="#"><i class="ion-person"></i> Admin</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-calendar"></i> {{$data->created_at}}</a>
                                </li>
                            </ul>
                            <p>
                                {!!$data->sub_heading!!}
                            </p>
                        </div>
                       
                    </div>
                    <!-- single blog post -->
                </div>
                <div class="blog-single-tags-share d-sm-flex justify-content-between">
                  
                    <div class="blog-single-share d-flex">
                        <span class="title">Share:</span>
                        <ul class="social">
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-google"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <!-- Sidebar Area Start -->
            @include('website.include.blog-category')
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!-- Shop Category Area End -->
@endsection