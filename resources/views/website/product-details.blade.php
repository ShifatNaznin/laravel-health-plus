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
                        <li>Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop details Area start -->
<section class="product-details-area mtb-60px">
    <div class="container">
        <form action="{{route('addto_cart',$data->id)}}" method="POST" id="addCart" data-type="JSON">
            @csrf
            {{-- <input type="hidden" name="product_id" value="{{$data->id}}"> --}}
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <?php
                if(!empty($data->image)){
                    $val= $data->image;
                  $v=json_decode($val);

                }

                 ?>


                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span" style="margin: 0px 20px 10px 20px !important;">
                                @if(isset($v))
                                <img id="zoom_01" class="zoompro" src="{{ asset('images') }}/{{$v[0]}}"
                                    data-zoom-image="{{ asset('images') }}/{{$v[0]}}" alt="" />
                                @endif
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 swiper-container">
                            <div class="swiper-wrapper">
                                @if(isset($v))
                                <div class="swiper-slide">
                                    <a class="active" data-image="{{ asset('images') }}/{{$v[0]}}"
                                        data-zoom-image="{{ asset('images') }}/{{$v[0]}}">
                                        <img class="img-responsive" src="{{ asset('images') }}/{{$v[0]}}" alt="" />
                                    </a>
                                </div>
                                @endif
                                @if(isset($v))


                                <?php
                                for ($x=1; $x < count($v) ; $x++) {

                                ?>
                                <div class="swiper-slide">
                                    <a data-image="{{ asset('images') }}/{{$v[$x]}}"
                                        data-zoom-image="{{ asset('images') }}/{{$v[$x]}}">
                                        <img class="img-responsive" src="{{ asset('images') }}/{{$v[$x]}}" alt="" />
                                    </a>
                                </div>
                                <?php } ?>

                                @endif


                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>{{$data->name}}</h2>
                        {{-- <p class="reference">Reference:<span> demo_17</span></p>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                    </div> --}}
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">$ {{$data->price}}</li>
                            </ul>
                        </div>
                        <div class="pro-details-list">
                            <p>{!!$data->details!!}</p>

                        </div>
                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qty" value="1" />
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <button class="btn" role="button" type="submit"> Add To Cart</button>
                            </div>
                        </div>
                        <div class="pro-details-wish-com">
                            <div class="pro-details-wishlist">
                                <a href="#"><i class="icon-heart"></i>Add to wishlist</a>
                            </div>
                            <div class="pro-details-compare">
                                <a href="#"><i class="icon-shuffle"></i>Add to compare</a>
                            </div>
                        </div>
                        <div class="pro-details-social-info">
                            <span>Share</span>
                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-policy">
                            <ul>
                                <li><img src="{{asset('contents/website')}}/assets/images/icons/policy.png"
                                        alt="" /><span>Security Policy (Edit With
                                        Customer Reassurance Module)</span></li>
                                <li><img src="{{asset('contents/website')}}/assets/images/icons/policy-2.png"
                                        alt="" /><span>Delivery Policy (Edit With
                                        Customer Reassurance Module)</span></li>
                                <li><img src="{{asset('contents/website')}}/assets/images/icons/policy-3.png"
                                        alt="" /><span>Return Policy (Edit With
                                        Customer Reassurance Module)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shop details Area End -->
<!-- product details description area start -->
<div class="description-review-area mb-60px">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a data-toggle="tab" href="#des-details1">Description</a>
                <a class="active" data-toggle="tab" href="#des-details2">Product Details</a>

            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <p>{!!$data->details!!}</p>
                    </div>
                </div>
                <div id="des-details1" class="tab-pane">
                    <div class="product-description-wrapper">
                        <p>{!!$data->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->


@push('js')
<script>

</script>
@endpush

@endsection
