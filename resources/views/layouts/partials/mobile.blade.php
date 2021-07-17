<!-- Mobile Header Section Start -->
<div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px" style="background: #0b2239 !important;">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img class="img-responsive"
                            src="{{asset('contents/website')}}/assets/images/logo/logo.png" alt="logo.png" /></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="cart-info d-flex align-self-center">
                        <a href="#" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a>
                        <a href="#" class="heart offcanvas-toggle d-xs-none"><i class="icon-heart"></i></a>
                        <a href="{{route('web_cart')}}" class="bag">
                            <i class="icon-bag"></i><span id="cartcount">{{Cart::count()}}</span></a>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>

<!-- Search Category Start -->
<div class="mobile-search-area d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-element media-body">
                    <form class="d-flex" action="#">

                        <input type="text" placeholder="Enter your search key ... " />
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Category End -->
<div class="mobile-category-nav d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!--=======  category menu  =======-->
                <div class="hero-side-category">
                    <!-- Category Toggle Wrap -->
                    <div class="category-toggle-wrap">
                        <!-- Category Toggle -->
                        <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                    </div>

                    <!-- Category Menu -->
                    <nav class="category-menu">
                        <ul>
                            <li><a href="#">Hand Sanitizer</a></li>
                            <li><a href="#">Lab N95 Face Mask</a></li>
                            <li><a href="#">Hand Gloves</a></li>
                            <li><a href="#">Medical Equipment</a></li>
                            <li><a href="#">Home Accessories</a></li>
                            <li><a href="#">New Arrival Product</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Wheelchair - Disabled</a></li>
                            <li><a href="#">Inhaler Pressure Drop</a></li>
                            <li><a href="#">Medicine &amp; Helath</a></li>
                            <li>
                                <a href="#" id="more-btn"><i class="ion-ios-plus-empty" aria-hidden="true"></i> More
                                    Categories</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!--=======  End of category menu =======-->
            </div>
        </div>
    </div>
</div>
<!-- Mobile Header Section End -->



<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="head">
            <span class="title">&nbsp;</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>

                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="/">Home</a>

                </li>
                <li class="{{ request()->is('web-about') ? 'active' : '' }}">
                    <a href="{{route('web_about')}}">About Us</a>
                </li>
                <li class="{{ request()->is('web-product') ? 'active' : '' }}">
                    <a href="{{route('web_product')}}">Product</a>
                </li>

                <li class="{{ request()->is('web-blog') ? 'active' : '' }}">
                    <a href="{{route('web_blog')}}">Blog </a>
                </li>
                <li class="{{ request()->is('web-contact') ? 'active' : '' }}"><a
                        href="{{route('web_contact')}}">contact Us</a>
                </li>
            </ul>
        </div>
        <div class="offcanvas-buttons mt-30px">
            <div class="header-tools d-flex">
                <div class="cart-info d-flex align-self-center">
                    <a href="#" class="user" style="color: #5d5151;"><i class="icon-user"></i></a>
                    <a href="#" data-number="3" style="color: #5d5151;"><i class="icon-heart"></i></a>
                    <a href="{{route('web_cart')}}" data-number="3" style="color: #5d5151;"><i class="icon-bag"></i></a>
                </div>
            </div>
        </div>
        <div class="offcanvas-social mt-30px">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<div class="offcanvas-overlay"></div>