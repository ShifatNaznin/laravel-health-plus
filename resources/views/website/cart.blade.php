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
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- cart area start -->
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
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item as $valuse)
                                @php
                                // dd($valuse->options->image);
                                $data=DB::table('products')->where('id',$valuse->product_id)->first();

                                @endphp
                                <?php

                                    $val= $valuse->options->image;
                                  $v=json_decode($val);



                                 ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">

                                            <img class="img-responsive" src="{{ asset('images') }}/{{$v[0]}}" alt="" />



                                        </a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$valuse->name}}</a></td>
                                    <td class="product-price-cart"><span class="amount">$
                                            {{$valuse->price}}</span></td>
                                    <td class="product-quantity">

                                        <div class="product_count">
                                            <input type="text" name="qty" id="sst2{{$valuse->id}}" maxlength="12"
                                                value="{{$valuse->qty}}" title="Quantity:" class="input-text qty">
                                            <button data-rowid="{{ $valuse->rowId }}" data-price="300" onclick="var result = document.getElementById('sst2{{$valuse->id}}');
                                                    var sst = result.value;
                                                    if( !isNaN( sst )) result.value++;
                                                    return false;" class="increase items-count" type="button">
                                                <i class="icon-arrow-up"></i>
                                            </button>
                                            <button data-rowid="{{ $valuse->rowId }}" data-price="300" onclick="var result = document.getElementById('sst2{{$valuse->id}}');
                                                    var sst = result.value;
                                                    if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;
                                                    return false;" class="reduced items-count" type="button">
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                        </div>


                                    </td>
                                    <td class="product-subtotal">$ {{$valuse->price * $valuse->qty}}</td>
                                    <td class="product-remove">
                                        {{-- <a href="#" class=""><i class="icon-pencil"></i></a> --}}
                                        <button type="submit" href="{{url('cart/product/remove/'.$valuse->rowId)}}"
                                            class="btn-remove"><i class="icon-close"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No Product!!
                                </div>
                                @endforelse

                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total Qty : {{ Cart::count() }} </th>
                                        <th>Total Price : {{ Cart::total() }}</th>
                                        <th></th>
                                    </tr>
                                </thead>



                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    {{-- <a href="#">Continue Shopping</a> --}}
                                </div>
                                <div class="cart-clear">

                                    <a href="{{route('web_checkout')}}">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
