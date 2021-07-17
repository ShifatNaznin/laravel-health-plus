<!-- Deal Area Start -->
<div class="deal-area bg-light-gray pt-60px pb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Deals Of The Day</h2>
                </div>
            </div>
        </div>
        <div class="deal-slider slider-nav-style-1">
            <div class="deal-slider-wrapper swiper-wrapper">
                @php
                $fproduct=App\Models\DayDeal::where('status',1)->get();
                @endphp

                @foreach ($fproduct as $data)
                @php
                $product=DB::table('products')->where('id', $data->product_id)->first();

                @endphp
                <?php
                   if(!empty($product->image)){
                       $val= $product->image;
                     $v=json_decode($val);
                  
                   }
                
                    ?>
                <div class="deal-slider-item swiper-slide">
                    <article class="list-product">
                        <div class="img-block img-block-d">
                            <a href="{{route('web_product_details',$product->id)}}" class="thumbnail">
                                <img class="first-img" src="{{ asset('images') }}/{{$v[0]}}" alt="" />

                            </a>

                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link"
                                href="{{route('web_product_details',$product->id)}}"><span>{{$product->name ?? Null}}</span></a>

                            <div class="pricing-meta">
                                <ul>
                                    {{-- <li class="old-price">৳ </li> --}}
                                    <li class="current-price">৳ {{$product->price ?? Null}}</li>
                                    {{-- <li class="discount-price">-10%</li>  --}}
                                </ul>
                            </div>


                            <div class="add-to-link-two">
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
                                        <a href="#"><i class="icon-shuffle"></i></a>
                                    </li>
                                </ul>
                            </div>

                            {{-- <div class="clockdiv">
                                    <div data-countdown="2021/03/01"></div>
                                </div> --}}
                        </div>
                        {{-- <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="#"><i class="icon-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-shuffle"></i></a>
                                </li>
                            </ul>
                        </div> --}}
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
    <!-- Banner Area Start -->
    <div class="banner-area mt-30px">
        <div class="container">
            <div class="row">
                @php
                $banadd=App\Models\AddBanner::orderBy('id','DESC')->take(1)->get();
                @endphp

                @foreach ($banadd as $data)
                <div class="col-md-12">
                    <div class="banner-wrapper banner-wrapper-three">
                        <a href="#"><img src="{{ asset('/images/'.$data->image) }}" alt="" /></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
</div>
<!-- Deal Area End -->