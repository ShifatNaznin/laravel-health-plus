<!-- Category Tab Area Start -->
<section class="category-tab-area mb-40px">
    <div class="container">
        <div class="section-title d-flex">
            <h2>Accessories</h2>
            <!-- Nav tabs -->

            @php
            $value=App\Models\AccessoriesCategory::where('status',1)->get();
            // $pro2=App\Models\Product::where('category',$value->category_id)->first();
            @endphp
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                @php
                $c=1;
                $s="ttt";
                @endphp
                @foreach ($value as $data)
                @php
                $cat=DB::table('categories')->where('id', $data->category_id)->first();
                $pro=App\Models\Product::where('category',$data->category_id)->get();

                @endphp
                <li class="nav-item">
                    <a class="nav-link @if($c==1) active @endif" data-toggle="tab"
                        href="#{{$s}}{{$c}}">{{$cat->category ?? Null}}</a>
                </li>
                @php
                $c++;
                @endphp
                @endforeach
            </ul>
        </div>

        <div class="tab-content banner-area">
            @php
            $d=1;
            $s="ttt";
            @endphp
            @foreach ($value as $data2)
            @php
            $cat=DB::table('categories')->where('id', $data2->category_id)->first();
            $pro=App\Models\Product::where('category',$data2->category_id)->get();
            $collection=DB::table('accessories_category_images')->where('category_id', $data2->category_id)->first();
            // dd($collection);
            @endphp



            <div id="{{$s}}{{$d}}" class="tab-pane @if($d==1) active @endif">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper banner-wrapper-a">
                            <a href="#">
                                <img src="{{ asset('/images/'.$collection->image) }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div class="feature-slider-2 slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                @foreach ($pro as $pdata)

                                <?php
                                    if(!empty($pdata->image)){
                                        $val= $pdata->image;
                                      $v=json_decode($val);
                                   
                                    }
                                 
                                     ?>
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block img-block-e">
                                            <a href="{{route('web_product_details',$pdata->id)}}" class="thumbnail">

                                                @if(isset($v))

                                                <img class="first-img" src="{{ asset('images') }}/{{$v[0]}}" alt="" />
                                                @endif
                                            </a>

                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link"
                                                href="{{route('web_product_details',$pdata->id)}}"><span>{{$pdata->name}}</span></a>

                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">৳ {{$pdata->price}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart">
                                                  

                                                        <a href="{{route('addto_cart',$data->id)}}"
                                                            class="cart_id addtocart cart-btn" type="submit"
                                                            title="Add to cart">ADD TO CART </a>
                                                </li>
                                                <li>
                                                    <a class="wishlist_id" type="submit" title="Add to Wishlist">
                                                        <input type="hidden" name="product_id" value="{{$data->id}}"><i
                                                            class="icon-heart"></i>
                                                    </a>
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