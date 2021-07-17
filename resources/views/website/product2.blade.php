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
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop Category Area End -->
<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <div class="shop-tab nav d-flex">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="fa fa-list"></i>
                        </a>
                        {{-- <p>There Are 17 Products.</p> --}}
                    </div>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex">
                        {{-- <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div> --}}
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35" id="productsubcat">
                    <!-- Shop Tab Content Start -->
                    <div class="tab-content jump">
                        <!-- Tab One Start -->
                        <div id="shop-1" class="tab-pane active">
                            <div class="row responsive-md-class responsive-xl-class responsive-lg-class">
                                @foreach ($item as $data)
                                <?php
                                if(!empty($data->image)){
                                    $val= $data->image;
                                  $v=json_decode($val);
                               
                                }
                             
                                 ?>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block img-block2">
                                            <a href="{{route('web_product_details',$data->id)}}" class="thumbnail">
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
                                                href="{{route('web_product_details',$data->id)}}"><span>{{$data->name}}</span></a>

                                            <div class="pricing-meta">
                                                <ul>
                                                    {{-- <li class="old-price">€18.90</li> --}}
                                                    <li class="current-price">$ {{$data->price}}</li>
                                                    {{-- <li class="discount-price">-5%</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart">
                                                    <a class="cart_id cart-btn" type="submit">
                                                        <input type="hidden" name="product_id" value="{{$data->id}}">
                                                        ADD TO CART </a>
                                                </li>
                                                <li>
                                                    <a class="wishlist_id" type="submit" title="Add to Wishlist">
                                                        <input type="hidden" name="product_id" value="{{$data->id}}"><i
                                                            class="icon-heart"></i>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Compare"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                @endforeach



                            </div>
                        </div>
                        <!-- Tab One End -->
                        <!-- Tab Two Start -->
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                @foreach ($item as $data)
                                <?php
                                    if(!empty($data->image)){
                                        $val= $data->image;
                                      $v=json_decode($val);
                                   
                                    }
                                 
                                     ?>
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">


                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block img-block2">
                                                        <a href="{{route('web_product_details',$data->id)}}"
                                                            class="thumbnail">
                                                            @if(isset($v))
                                                            <img class="first-img" src="{{ asset('images') }}/{{$v[0]}}"
                                                                alt="" />

                                                            @endif
                                                        </a>

                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link"
                                                            href="{{route('web_product_details',$data->id)}}"><span>{{$data->name}}</span></a>

                                                    </div>
                                                    <div class="box-inner">
                                                        {{-- <div class="in-stock">Availability: <span>299 In
                                                                Stock</span></div> --}}
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{$data->price}}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart">
                                                                    <a class="cart_id" type="submit" title="Add to cart"
                                                                        class="cart-btn" href="#">ADD TO CART </a>
                                                                </li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to
                                                                        Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to
                                                                        Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <!-- Tab Two End -->
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mb-60px mt-30px">
                        <ul>
                            <li>
                                <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            @include('website.include.product-category')
        </div>
    </div>
</div>

@push('js')
{{-- <script>
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

$(".cart_id").click(function () {
// alert('ok');
var cart_id = $(this).find("input").val();
// alert(cart_id);
// console.log(sub_cat_id);
$.ajax({
type: "POST",
url: "/get-cart-product",
data: {
_token: "{{ csrf_token() }}",
cart_id: cart_id,
},
success: function (data) {
console.log(data);
// alert(ok);
$("#cartcount").html(data.countval);

},
});
});
$(".wishlist_id").click(function () {
// alert('ok');
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
$("#wishlistcount").html(data.countval2);

},
});
});
});

</script> --}}
@endpush

@endsection