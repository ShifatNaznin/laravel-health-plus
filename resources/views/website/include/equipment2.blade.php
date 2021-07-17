<!-- Category Tab Area Start -->
<section class="category-tab-area mt-60px mb-40px">
    <div class="container">
        <div class="section-title d-flex">
            <h2>Medical Equipment</h2>
            <!-- Nav tabs -->
            @php
            $value=App\Models\MedicalEquipmentCategory::where('status',1)->get();
            // $pro2=App\Models\Product::where('category',$value->category_id)->first();
            @endphp
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                @php
                $c=1;
                $s="tt";
                @endphp
                @foreach ($value as $data)
                @php
                $cat=DB::table('categories')->where('id', $data->category_id)->first();
                $pro=App\Models\Product::where('category',$data->category_id)->get();

                @endphp
                <li class="nav-item">
                    <a class="nav-link @if($c==1) active @endif" data-toggle="tab" href="#{{$s}}{{$c}}">{{$cat->category ?? Null}}</a>
                </li>
                @php
                $c++;
                @endphp
                @endforeach
              

            </ul>


        </div>


        <!-- Tab panes -->
        <div class="tab-content banner-area">
            @php
            $d=1;
            $s="tt";
            @endphp
            @foreach ($value as $data2)
            @php
            $cat=DB::table('categories')->where('id', $data2->category_id)->first();
            $pro=App\Models\Product::where('category',$data2->category_id)->get();

            @endphp



            <div id="{{$s}}{{$d}}" class="tab-pane @if($d==1) active @endif">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="#"><img src="{{asset('contents/website')}}/assets/images/banner-image/5.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div class="feature-slider-2 slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                @foreach ($pro as $pdata)
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="#" class="thumbnail">
                                                <img class="first-img"
                                                    src="{{asset('contents/website')}}/assets/images/product-image/6.jpg"
                                                    alt="" />
                                                <img class="second-img"
                                                    src="{{asset('contents/website')}}/assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="#"><span>{{$pdata->name}}</span></a>
                                            <h2><a href="#" class="product-link">Product 1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">৳ 18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="#"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="#"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
            $d++;
            @endphp
            @endforeach

        </div>
    </div>
</section>
<!-- Category Tab Area end -->