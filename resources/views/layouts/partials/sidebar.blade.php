<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-40 img-radius" src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg"
                    alt="User-Profile-Image">
                <div class="user-details">
                    <span>John Doe</span>
                    <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="#"><i class="ti-user"></i>View Profile</a>
                        <a href="#"><i class="ti-settings"></i>Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   this.closest('form').submit();">
                            <i class="ti-layout-sidebar-left"></i> Logout
                        </a>
                    </li>

                    </form>
                    {{-- <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a> --}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-search">
            <span class="searchbar-toggle"> </span>
            <div class="pcoded-search-box ">
                <input type="text" placeholder="Search">
                <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-trigger {{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{route('admin')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <li class="{{ request()->is('user/user') ? 'active' : '' }}">
                <a href="{{route('user')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            @php
            $ur = Auth::user()->user_role;
            @endphp
            @if ($ur<3)
                
         
            <li class="{{ request()->is('userrole/userrole') ? 'active' : '' }}">
                <a href="{{route('userrole')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">User Role</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('logo/logo') ? 'active' : '' }}">
                <a href="{{route('logo')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Logo & Title</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('contactinformation/contactinformation') ? 'active' : '' }}">
                <a href="{{route('contactinformation')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Contact Information</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('banner/banner') ? 'active' : '' }}">
                <a href="{{route('banner')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Banner</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('about/about') ? 'active' : '' }}">
                <a href="{{route('about')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">About</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ request()->is('about/about') ? 'active' : '' }}">
                <a href="{{route('addbanner')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Offer banner</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ request()->is('blogcategory/blogcategory') ? 'active' : '' }}">
                <a href="{{route('blogcategory')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Blog Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('blog/blog') ? 'active' : '' }}">
                <a href="{{route('blog')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Blog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ request()->is('category/category') ? 'active' : '' }}">
                <a href="{{route('category')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Product Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('subcategory/subcategory') ? 'active' : '' }}">
                <a href="{{route('subcategory')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Product SubCategory</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('product/product') ? 'active' : '' }}">
                <a href="{{route('product')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Product</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
           
            <li
                class="pcoded-hasmenu @if(request()->is('orderlist/order-information') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('orderlist/orderlist') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('orderlist/checkout-information') ? 'active' : '') pcoded-trigger complete @endif">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Order
                    </span>
                    <span class="pcoded-mcaret"></span>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('orderlist/order-information') ? 'active' : '' }}">
                            <a href="{{route('order_information')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Order
                                    Information</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{ request()->is('orderlist/orderlist') ? 'active' : '' }}">
                            <a href="{{route('orderlist')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Order
                                    Details</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{request()->is('orderlist/checkout-information') ? 'active' : ''}}">
                            <a href="{{route('checkout_information')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Checkout
                                    Information</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>



                    </ul>
                </a>
            </li>
            <li class="pcoded-hasmenu @if(request()->is('equipmentcategory/equipmentcategory') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('equipmentcategory-image/equipmentcategory-image') ? 'active' : '') pcoded-trigger complete @endif">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Home Medical Equipment
                    </span>
                    <span class="pcoded-mcaret"></span>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('equipmentcategory/equipmentcategory') ? 'active' : '' }}">
                            <a href="{{route('equipmentcategory')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                    data-i18n="nav.form-components.form-elements-add-on">Category</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li
                            class="{{request()->is('equipmentcategory-image/equipmentcategory-image') ? 'active' : ''}}">
                            <a href="{{route('equipmentcategory_image')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Category
                                    Image</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>



                    </ul>
                </a>
            </li>
            <li class="pcoded-hasmenu @if(request()->is('accessories/accessories') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('accessories-image/accessories-image') ? 'active' : '') pcoded-trigger complete @endif">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Home Accessories
                    </span>
                    <span class="pcoded-mcaret"></span>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('accessories/accessories') ? 'active' : '' }}">
                            <a href="{{route('accessories')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                    data-i18n="nav.form-components.form-elements-add-on">Category</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{request()->is('accessories-image/accessories-image') ? 'active' : ''}}">
                            <a href="{{route('accessories_image')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Category
                                    Image</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>



                    </ul>
                </a>
            </li>

            <li class="{{ request()->is('featuredproducts/featuredproducts') ? 'active' : '' }}">
                <a href="{{route('featuredproducts')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Home Featured Products</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('daydeal/daydeal') ? 'active' : '' }}">
                <a href="{{route('daydeal')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Home Deals Of The Day</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ request()->is('recentlyadded/recentlyadded') ? 'active' : '' }}">
                <a href="{{route('recentlyadded')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Home Recently Added</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ request()->is('contactmessages/contactmessages') ? 'active' : '' }}">
                <a href="{{route('contactmessages')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Contact Message</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('subscribe/subscribe') ? 'active' : '' }}">
                <a href="{{route('subscribe')}}">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Subscribe List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="pcoded-hasmenu @if(request()->is('admin/footer_one') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('admin/footer_two') ? 'active' : '') pcoded-trigger complete @elseif(request()->is('admin/footer_three') ? 'active' : '') pcoded-trigger complete @endif">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Footer
                    </span>
                    <span class="pcoded-mcaret"></span>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/footer_one') ? 'active' : '' }}">
                            <a href="{{route('footer_one')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Footer
                                    One</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{request()->is('admin/footer_two') ? 'active' : ''}}">
                            <a href="{{route('footer_two')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Footer
                                    Two</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{request()->is('admin/footer_three') ? 'active' : ''}}">
                            <a href="{{route('footer_three')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Footer
                                    Three</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>



                    </ul>
                </a>
            </li>

          


            <li class="">
                <a href="javascript:void(0)">


                </a>

            </li>
            <li class="">
                <a href="javascript:void(0)">


                </a>

            </li>
            @endif
        </ul>

    </div>
</nav>