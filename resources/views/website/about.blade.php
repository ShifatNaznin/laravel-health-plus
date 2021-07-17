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
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Breadcrumb Area End-->
    <!-- About Area Start -->
    @foreach ($item as $data)
        
   
    <section class="about-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-image mb-md-30px mb-lm-30px ">
                        <img src="{{asset('/images/'.$data->image)}}" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-title">
                            <h2>{{$data->heading}}</h2>
                        </div>
                        <p class="mb-30px">
                           {!!$data->sub_heading!!}
                        </p>
                     
                    </div>
                </div>
            </div>
            {{-- <div class="row mt-60px">
                <div class="col-md-4 mb-lm-30px">
                    <div class="single-about">
                        <h4>Our Company</h4>
                        <p>
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                            elit.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-lm-30px">
                    <div class="single-about">
                        <h4>Our Team</h4>
                        <p>
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                            elit.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-about">
                        <h4>Testimonial</h4>
                        <p>
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                            elit.
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    @endforeach
    <!-- About Area End -->
@endsection