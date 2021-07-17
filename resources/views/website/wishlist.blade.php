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
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Wishlist area start -->
<div class="cart-main-area mtb-60px">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>

                                    <th>Subtotal</th>
                                    <th>Delete</th>
                                    <th>Add To Cart</th>
                                </tr>
                            </thead>
                            <tbody id="wishlist_remove_id">

                                @php
                                $auth_user = Auth::user();

                                @endphp
                                @if(isset($auth_user))
                                @php
                                $wishlist = DB::table('wishlists')->where('user_id', $auth_user->id)->get();

                                @endphp


                                @forelse ($wishlist as $wlist)
                                @php

                                $data=DB::table('products')->where('id',$wlist->product_id)->first();

                                @endphp
                                <?php
                                if(!empty($data->image)){
                                    $val= $data->image;
                                  $v=json_decode($val);

                                }

                                 ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            @if(isset($v))
                                            <img class="img-responsive" src="{{ asset('images') }}/{{$v[0]}}" alt="" />

                                            @endif
                                        </a>
                                    </td>
                                    <td class="product-name"><a href="#"> {{$data->name ?? Null}}</a></td>
                                    <td class="product-price-cart"><span class="amount">$
                                            {{$data->price ?? Null}}</span></td>

                                    <td class="product-subtotal">$70.00</td>
                                    <td class="product-remove">
                                        {{-- <a href="#"><i class="icon-pencil"></i></a> --}}
                                        <a type="submit" class="wishlist_remove">
                                            <input type="hidden" name="wishlist_remove" value="{{$wlist->id}}">
                                            <i class="icon-close"></i></a>
                                    </td>
                                    <td class="product-wishlist-cart">

                                        <a href="{{route('addto_cart',$data->id)}}" class="cart_id addtocart"
                                            type="submit" title="Add to cart" class="cart-btn" href="#">ADD TO CART </a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No Product!!
                                </div>
                                @endforelse

                                @else

                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Wishlist area end -->
@endsection