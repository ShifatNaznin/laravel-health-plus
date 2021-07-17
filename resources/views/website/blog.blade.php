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
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop Category Area End -->
<div class="shop-category-area blog-grid mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog-posts">
                    <div class="row">
                        @foreach ($item as $data)
                        <div class="col-md-4 mb-res-sm-30px">
                            <div class="single-blog-post mb-30px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="{{route('web_blog_details',$data->id)}}"><img src="{{ asset('/images/'.$data->image) }}"
                                                alt="blog" class="img-responsive" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <h4 class="blog-title"><a href="{{route('web_blog_details',$data->id)}}">{{$data->heading}}</a></h4>
                                    <ul class="blog-page-meta">
                                        <li>
                                            <a href="#"><i class="ion-person"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-calendar"></i> {{$data->created_at}}</a>
                                        </li>
                                    </ul>
                                    <p>
                                        {{-- {!!$data->sub_heading!!} --}}
                                    </p>
                                    <a class="read-more-btn" href="{{route('web_blog_details',$data->id)}}"> Read More <i
                                            class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <!--  Pagination Area Start -->
                <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px">
                    <ul>
                        <li>
                            <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                        </li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li>
                            <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!--  Pagination Area End -->
            </div>
            @include('website.include.blog-category')
        </div>
    </div>
</div>
<!-- Shop Category Area End -->
@endsection