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
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- contact area start -->
<div class="contact-area mtb-60px">
    <div class="container">

        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message Send Successfully</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="custom-row-2">
            @php
            $cont=App\Models\ContactInformation::orderBy('id','DESC')->take(1)->get();
            @endphp

            @foreach ($cont as $data)
            <div class="col-lg-4 col-md-5 mb-lm-30px">
                <div class="contact-info-wrap">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-call"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a href="tel://+012 345 678 102">{{$data->phone}}</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-globe"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a href="mailto://urname@email.com">{{$data->email}}</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-pin"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>{!!$data->address!!}</p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <h3>Follow Us</h3>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a href="{{$data->facebook_link}}"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{$data->twitter_link}}"><i class="ion-social-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="{{$data->instragram_link}}"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <div class="contact-title mb-30">
                        <h2>Get In Touch</h2>
                    </div>

                    <form class="contact-form-style" id="contact-form" action="{{route('web_contact_msg')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="f_name" placeholder="First Name*" type="text" required/>
                            </div>
                            <div class="col-lg-6">
                                <input name="l_name" placeholder="Last Name*" type="text" required/>
                            </div>
                            <div class="col-lg-6">
                                <input name="email" placeholder="Email*" type="email" required/>
                            </div>
                            <div class="col-lg-6">
                                <input name="phone" placeholder="Phone*" type="text" required/>
                            </div>
                            <div class="col-lg-12">
                                <input name="subject" placeholder="Subject*" type="text" required/>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Your Message*" required></textarea>
                            </div>
                            <button class="submit" type="submit">SEND</button>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>

        <div class="contact-map mb-10" style="margin: 20px 0px 0px 0px;">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58394.44720653252!2d90.36075!3d23.830937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba679dd1636a2d32!2sHSBLCO%20Solution!5e0!3m2!1sen!2sus!4v1612787751400!5m2!1sen!2sus"
                    width="1410" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->
@endsection
