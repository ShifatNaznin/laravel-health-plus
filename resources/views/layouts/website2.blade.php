<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
    $logo=App\Models\Logo::orderBy('id','DESC')->take(1)->get();
    @endphp

    @foreach ($logo as $data)
    <title>{{$data->title}}</title>
    @endforeach

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{asset('contents/website')}}/assets/images/favicon/favicon.png" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/style.min.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/style.css" />     -->
</head>

<body>
    <!-- Header Section Start From Here -->
    <header class="header-wrapper">
        <!-- Header Nav Start -->
        <div class="header-nav" style="background: #0b2239 !important;">
            <div class="container">
                <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                    <div class="header-static-nav">
                        @php
                        $logo=App\Models\Logo::orderBy('id','DESC')->take(1)->get();
                        @endphp

                        @foreach ($logo as $data)
                        <p>Welcome you to {{$data->title}}!</p>
                        @endforeach

                    </div>
                    <div class="header-menu-nav">

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-top ptb-30px d-xl-block d-none" style="background: #0b2239;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="/">
                                @php
                                $logo=App\Models\Logo::orderBy('id','DESC')->take(1)->get();
                                @endphp

                                @foreach ($logo as $data)
                                <img class="img-responsive" src="{{ asset('/images/'.$data->logo) }}" alt="logo.png" />
                                @endforeach

                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body">
                                <form class="d-flex" action="#">

                                    <input type="text" placeholder="Enter your search key ... " />
                                    <button><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                            <div class="contact-link">

                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <span style="font-size: 35px;"><i class="icon-earphones-alt"></i></span>


                                    </div>
                                    <div class="col-8">
                                        <div class="phone">

                                            <p>Call us:</p>
                                            @php
                                            $cont=App\Models\ContactInformation::orderBy('id','DESC')->take(1)->get();
                                            @endphp

                                            @foreach ($cont as $data)
                                            <a href="tel:(+800)345678"> {{$data->phone}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--Cart info Start -->
                            {{-- <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    @php
                                    $cart = DB::table('carts')->get();
                                    $wishlist = DB::table('wishlists')->get();

                                    @endphp

                                    <a href="{{route('web_wishlist')}}" class="heart"><i class="icon-heart"></i> <span
                                id="wishlistcount">{{count($wishlist)}}</span>
                            </a>
                            <a href="{{route('web_cart')}}" class="bag">
                                <i class="icon-bag"></i><span id="cartcount">{{count($cart)}}</span></a>
                        </div>
                    </div> --}}
                </div>
                <!--Cart info End -->
            </div>
        </div>
        </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 custom-col-2">
                        <div class="header-menu-vertical">
                            <h4 class="menu-title">All Cattegories</h4>
                            <ul class="menu-content display-none">
                                @php
                                $cat=App\Models\Category::get();
                                @endphp

                                @foreach ($cat as $data)
                                <li class="menu-item"><a
                                        href="{{route('web_category_products',$data->id)}}">{{$data->category}}</a></li>
                                @endforeach
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-9 custom-col-2">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="header-horizontal-menu">
                                    <ul class="menu-content">
                                        <li class="menu-dropdown {{ request()->is('/') ? 'active' : '' }}">
                                            <a href="/">Home</a>

                                        </li>
                                        <li class="menu-dropdown {{ request()->is('web-about') ? 'active' : '' }}">
                                            <a href="{{route('web_about')}}">About Us</a>
                                        </li>
                                        <li class="menu-dropdown {{ request()->is('web-product') ? 'active' : '' }}">
                                            <a href="{{route('web_product')}}">Product</a>
                                        </li>

                                        <li class="menu-dropdown {{ request()->is('web-blog') ? 'active' : '' }}">
                                            <a href="{{route('web_blog')}}">Blog </a>
                                        </li>
                                        <li class="{{ request()->is('web-contact') ? 'active' : '' }}"><a
                                                href="{{route('web_contact')}}">contact Us</a>
                                        </li>
                                        @if (Auth::user())
                                        <li class="{{ request()->is('admin') ? 'active' : '' }}"><a
                                                href="{{route('admin')}}">Dashbord</a>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   this.closest('form').submit();">
                                                    <i class="ti-layout-sidebar-left"></i> Logout
                                                </a>
                                            </li>

                                        </form>

                                        @else
                                        <li class="{{ request()->is('logintwo') ? 'active' : '' }}"><a
                                                href="{{route('logintwo')}}">Login</a>
                                        </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <!-- header horizontal menu -->
                                <div class="intro-text-shipping text-right">
                                    <div class="free-ship header-tools">
                                        <div class="cart-info">
                                            @php
                                            // $cartss = DB::table('cartlists')->get();
                                            // $wishlist = DB::table('wishlists')->get();
                                            $auth_user = Auth::user();
                                            // dd(Auth::user());
                                            @endphp
                                            @if(isset($auth_user))
                                            @php
                                            $wishlist = DB::table('wishlists')->where('user_id', $auth_user->id)->get();

                                            @endphp

                                            <a href="{{route('web_wishlist')}}" class="heart"
                                                style="color:#0b2239 !important;"><i class="icon-heart"></i>
                                                <span id="wishlistcount">{{count($wishlist)}}</span>
                                            </a>
                                            @else
                                            <a href="{{route('web_wishlist')}}" class="heart"
                                                style="color:#0b2239 !important;"><i class="icon-heart"></i>
                                                <span id="wishlistcount">0</span>
                                            </a>
                                            @endif
                                            <a href="{{route('web_cart')}}" class="bag"
                                                style="color:#0b2239 !important;">
                                                <i class="icon-bag"></i><span
                                                    id="cartcount">{{Cart::count()}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->

    @include('layouts.partials.mobile')

    @yield('content')












    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        @php
                        $fone=App\Models\FooterOne::take(1)->get();
                        @endphp

                        @foreach ($fone as $data)
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">{{$data->name}}</h4>
                                <p class="text-infor">{!!$data->details!!}</p>
                                <div class="need-help">
                                    <p class="phone-info">
                                        NEED HELP?
                                        @php
                                        $cont=App\Models\ContactInformation::orderBy('id','DESC')->take(1)->get();
                                        @endphp

                                        @foreach ($cont as $data)
                                        <span>
                                            {{$data->phone}}
                                        </span>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <ul>
                                        @php
                                        $ftwo=App\Models\FooterTwo::take(1)->get();
                                        @endphp

                                        @foreach ($ftwo as $data)
                                        <li><a href="{{$data->link}}">{{$data->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">CUSTOM LINKS</h4>
                                <div class="footer-links">
                                    <ul>
                                        @php
                                        $fthree=App\Models\FooterThree::take(1)->get();
                                        @endphp

                                        @foreach ($fthree as $data)
                                        <li><a href="{{$data->link}}">{{$data->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 ">
                            <div class="single-wedge">
                                <h4 class="footer-herading">NEWSLETTER</h4>
                                <div class="subscrib-text">
                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info
                                        in the legal notice.</p>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                        name="mc-embedded-subscribe-form" method="post"
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required=""
                                                placeholder="Enter your email here.." name="EMAIL" value="" />
                                            <div class="mc-news" aria-hidden="true"
                                                style="position: absolute; left: -5000px;">
                                                <input type="text" value="" tabindex="-1"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit"
                                                    name="subscribe" value="Sign Up" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="social-info">
                                    <ul>
                                        @php
                                        $con=App\Models\ContactInformation::orderBy('id','DESC')->take(1)->get();
                                        @endphp

                                        @foreach ($con as $data)
                                        <li>
                                            <a href="{{$data->facebook_link}}"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$data->twitter_link}}"><i class="icon-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$data->instragram_link}}"><i
                                                    class="icon-social-instagram"></i></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copy-text">Copyright © 2020 HSBLCO</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <img class="payment-img" src="{{asset('contents/website')}}/assets/images/icons/payment.png"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/14.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('contents/website')}}/assets/images/product-image/14.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">৳ 18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm
                                    tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis
                                    nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#"> + Add To Cart</a>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>

                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="addCart">
        @csrf

    </form>
    <!-- Modal end -->
    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="{{asset('contents/website')}}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{asset('contents/website')}}/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/plugins/swiper.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/plugins/countdown.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/plugins/scrollup.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/plugins/elevateZoom.js"></script>

    @stack('js')

    <!-- Main Activation JS -->
    <script src="{{asset('contents/website')}}/assets/js/main.js"></script>

    <script>
        $(document).ready(function () {
            // function subcat() {
            $(".subcat").click(function () {

                var sub_cat_id = $(this).find("input").val();
                // alert(sub_cat_id);
                // console.log(sub_cat_id);
                $.ajax({
                    type: "POST",
                    url: "/get-web-subproduct",
                    data: {
                        _token: "{{ csrf_token() }}",
                        sub_cat_id: sub_cat_id,
                    },
                    success: function (data) {
                        console.log(data);
                        // alert(ok);
                        $("#productsubcat").html(data);

                    },
                });
            });
            // }
            // subcat();
            //     function cartcount() {
            //     $(".cart_id").click(function () {
            //         //    alert('ok');
            //         var cart_id = $(this).find("input").val();
            //         // alert(cart_id);
            //         // console.log(sub_cat_id);
            //         $.ajax({
            //             type: "POST",
            //             url: "/get-cart-product",
            //             data: {
            //                 _token: "{{ csrf_token() }}",
            //                 cart_id: cart_id,
            //             },
            //             success: function (data) {
            //                 // console.log(data);
            //                 // alert(ok);
            //                 $("#cartcount").html(data.countval);

            //             },
            //         });
            //     });
            // }
            // cartcount();


            $(".wishlist_id").click(function () {
                //    alert('ok');
                var wishlist_id = $(this).find("input").val();
                // alert(wishlist_id);
                // console.log(sub_cat_id);
                $.ajax({
                    type: "POST",
                    url: "/get-wishlist-product",
                    data: {
                        _token: "{{ csrf_token() }}",
                        wishlist_id: wishlist_id,
                    },
                    success: function (data) {
                        console.log(data);
                        // alert(ok);

                        if (data == "not_login") {
                            window.location = "/logintwo";
                        } else {
                            $("#wishlistcount").html(data.countval2);
                            // console.log(data)
                        }

                    },
                });
            });

            function wishinit() {
                $(".wishlist_remove").click(function () {
                    //    alert('ok');
                    var wishlist_remove = $(this).find("input").val();
                    // alert(wishlist_remove);
                    // console.log(sub_cat_id);
                    $.ajax({
                        type: "POST",
                        url: "/wishlist-remove",
                        data: {
                            _token: "{{ csrf_token() }}",
                            wishlist_remove: wishlist_remove,
                        },
                        success: function (data) {
                            console.log(data);
                            if (data == "not_login") {
                            window.location = "/logintwo";
                        } else {
                            $("#wishlist_remove_id").html(data.view);
                            $("#wishlistcount").html(data.countval22);
                            wishinit();
                        }


                        },
                    });
                });
            }
            wishinit();


        });

    </script>
    <script>
        $(function () {
            $(document).on('click', '.addtocart', function (event) {
                event.preventDefault();

                var url = $(this).attr('href');

                // alert(url);
                $('#addCart').attr('action', url).submit();

            });
        });

    </script>
    <script>
        $(function () {


            $('#addCart').submit(function (e) {
                e.preventDefault();

                var formdata = new FormData(this);
                // console.log(formdata);

                var datatype = $(this).data('type');

                $.ajax({
                    url: this.action,
                    type: this.method,
                    data: formdata,
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success(data) {
                        // console.log(data);
                        return cartvalcount();
                    }

                });

            });


            function cartvalcount() {
                var url = window.origin + '/get-cart-product';
                // console.log(url);
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: 'HTML',
                    success(data) {
                        console.log(data);

                        $('#cartcount').html(data);
                        // if (data == "not_login") {
                        //     window.location = "/logintwo";
                        // } else {
                        //    $('#cartcount').html(data);
                        //     // console.log(data)
                        // }
                    }
                });
            }

            function cart_update_page() {
                var url = window.origin + '/cart-update-page';
                // console.log(url);
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: 'HTML',
                    success(data) {
                        console.log(data);
                        $('table').html(data);
                    }
                });
            }


            $(document).on('click', '.increase', function () {
                // alert('ok');
                var rowid = $(this).data('rowid');
                var qty = $(this).prev().val();
                var url = window.origin + '/cart/update';

                $.ajax({
                    url: url,
                    type: "get",
                    data: {
                        qty: qty,
                        rowid: rowid
                    },
                    dataType: 'JSON',
                    // beforeSend(){
                    // 	$('.loading').css('display', 'block');
                    // },
                    success(data) {
                        console.log(data);
                        return cartvalcount() + cart_update_page();
                    }

                    // complete() {
                    //     $('.loading').css('display', 'none');
                    // }
                });

            });

            $(document).on('click', '.reduced', function () {
                var rowid = $(this).data('rowid');
                var qty = $(this).prev().prev().val();
                var url = window.origin + '/cart/update';

                $.ajax({
                    url: url,
                    type: "get",
                    data: {
                        qty: qty,
                        rowid: rowid
                    },
                    dataType: 'JSON',
                    // beforeSend(){
                    // 	$('.loading').css('display', 'block');
                    // },
                    success(data) {

                        return cartvalcount() + cart_update_page();
                    },
                    complete() {
                        $('.loading').css('display', 'none');
                    }
                });

            });

            $(document).on('click', '.btn-remove', function (e) {
                e.preventDefault();

                var url = $(this).attr('href');

                $.ajax({
                    url: url,
                    type: "get",
                    dataType: 'JSON',
                    // beforeSend(){
                    // 	$('.loading').css('display', 'block');
                    // },
                    success(data) {

                        return cartvalcount() + cart_update_page();
                    },
                    complete() {
                        $('.loading').css('display', 'none');
                    }
                });

            });

        })

    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
</body>



</html>