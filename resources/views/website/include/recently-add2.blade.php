<!-- Recently Add area start -->
<div class="recent-add-area mb-30px mt-60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Recently Added</h2>
                </div>
            </div>
        </div>
        <div class="recent-slider slider-nav-style-1 multi-row-2">
            <div class="recent-slider-wrapper swiper-wrapper">

                <div class="recent-slider-item swiper-slide">
                    @php
                    $co=1;
                    $fproduct=App\Models\RecentlyAdded::where('status',1)->get();
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
                     @if($co % 2 == 0)
                        
                   
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="{{route('web_product_details',$product->id)}}" class="thumbnail">

                                <img class="first-img" src="{{ asset('images') }}/{{$v[0]}}" alt="" />

                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link"
                                href="{{route('web_product_details',$product->id)}}"><span>{{$product->name ?? Null}}</span></a>
                            <h2><a href="#" class="product-link">Product 1</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    @else
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('web_product_details',$product->id)}}" class="thumbnail">

                                <img class="first-img" src="{{ asset('images') }}/{{$v[0]}}" alt="" />

                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link"
                                href="{{route('web_product_details',$product->id)}}"><span>{{$product->name ?? Null}}</span></a>
                            <h2><a href="#" class="product-link">Product 1</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    @endif
                    @php
                        $co++;
                    @endphp
                    @endforeach
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Recently Add area end -->