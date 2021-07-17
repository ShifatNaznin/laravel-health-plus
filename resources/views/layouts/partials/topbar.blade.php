<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo" style="background-color: #303549 !important;">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="{{asset('contents/admin')}}/files/assets/images/logo.png"
                    alt="Theme-Logo" style="width: 150px;" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li>
                <li>
                    <a class="main-search morphsearch-search" href="#">
                        <!-- themify icon -->
                        <i class="ti-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>

            </ul>
            <ul class="nav-right">
                <li class="header-notification lng-dropdown">
                    <a href="#" id="dropdown-active-item">
                        <img src="{{asset('contents/admin')}}/files/assets/images/flags/ENGLISH.jpg" alt=""> English
                    </a>
                    <ul class="show-notification">
                        <li>
                            <a href="#" data-lng="en">
                                <img src="{{asset('contents/admin')}}/files/assets/images/flags/ENGLISH.jpg" alt="">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="#" data-lng="es">
                                <img src="{{asset('contents/admin')}}/files/assets/images/flags/SPAIN.jpg" alt="">
                                Spanish
                            </a>
                        </li>
                        <li>
                            <a href="#" data-lng="pt">
                                <img src="{{asset('contents/admin')}}/files/assets/images/flags/PORTO.jpg" alt="">
                                Portuguese
                            </a>
                        </li>
                        <li>
                            <a href="#" data-lng="fr">
                                <img src="{{asset('contents/admin')}}/files/assets/images/flags/FRANCE.jpg" alt="">
                                French
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header-notification">
                    <a href="#!">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink"></span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center img-radius"
                                    src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">John Doe</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center img-radius"
                                    src="{{asset('contents/admin')}}/files/assets/images/avatar-3.jpg"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">Joseph William</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center img-radius"
                                    src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">Sara Soudein</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="header-notification">
                    <a href="#!" class="displayChatbox">
                        <i class="ti-comments"></i>
                        <span class="badge bg-c-green"></span>
                    </a>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!">
                        <img src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg" class="img-radius"
                            alt="User-Profile-Image">
                        <span>John Doe</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-email"></i> My Messages
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-lock"></i> Lock Screen
                            </a>
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
                    </ul>
                </li>
            </ul>
            <!-- search -->
            <div id="morphsearch" class="morphsearch">
                <form class="morphsearch-form">
                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                    <button class="morphsearch-submit" type="submit">Search</button>
                </form>
                <div class="morphsearch-content">
                    <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg" class="img-radius"
                                alt="Sara Soueidan" />
                            <h3>Sara Soueidan</h3>
                        </a>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-2.jpg" class="img-radius"
                                alt="Shaun Dona" />
                            <h3>Shaun Dona</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-3.jpg" class="img-radius"
                                alt="PagePreloadingEffect" />
                            <h3>Page Preloading Effect</h3>
                        </a>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg" class="img-radius"
                                alt="DraggableDualViewSlideshow" />
                            <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-2.jpg" class="img-radius"
                                alt="TooltipStylesInspiration" />
                            <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object img-radius" href="#!">
                            <img src="{{asset('contents/admin')}}/files/assets/images/avatar-3.jpg" class="img-radius"
                                alt="NotificationStyles" />
                            <h3>Notification Styles Inspiration</h3>
                        </a>
                    </div>
                </div>
                <!-- /morphsearch-content -->
                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
            </div>
            <!-- search end -->
        </div>
    </div>
</nav>