<!-- Feature Area start -->
<div class="feature-area mt-60px mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Featured Products</h2>
                </div>
            </div>
        </div>
        <div class="feature-slider slider-nav-style-1">
            <div class="feature-slider-wrapper swiper-wrapper">
                <!-- Single Item -->
                @php
                $fproduct=App\Models\FeaturedProducts::where('status',1)->get();
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
                <div class="feature-slider-item swiper-slide">
                    <article class="list-product">
                        <div class="img-block img-block-f">
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
                                    <li class="old-price not-cut">৳ {{$product->price ?? Null}}</li>
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
                                        class="icon-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-shuffle"></i></a>
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
<!-- Feature Area End -->