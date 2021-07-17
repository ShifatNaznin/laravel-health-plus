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
                                        {{-- <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                value="{{$valuse->qty}}" />
                                        </div> --}}
                                        <div class="cart-plus-minus">
                                            <button type="button" class="reduced" data-rowid="{{ $valuse->rowId }}" onclick="var result = document.getElementById('sst{{ $valuse->id }}'); 
                                                var sst = result.value; 
                                                if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;"></button>
                                            {{-- <input class="cart-plus-minus-box" type="text" id="sst{{ $valuse->id }}" name="qty" value="{{$valuse->qty}}"> --}}
                                            <input type="text" class="cart-plus-minus-box" name="qty" id="sst{{ $valuse->id }}" maxlength="12" value="{{ $valuse->qty }}" title="Quantity:" class="input-text qty"
                                        />
                                        <button class="increase" type="button" data-rowid="{{ $valuse->rowId }}" onclick="var result = document.getElementById('sst{{ $valuse->id }}'); 
                                            var sst = result.value; 
                                            if( !isNaN( sst )) result.value++;
                                            return false;" ></button>
                                    </div>

                                        {{-- <input type="text" name="qty" id="sst{{ $valuse->id }}" maxlength="12" value="{{ $valuse->qty }}" title="Quantity:" class="input-text qty"
                                        />
                                        <button data-rowid="{{ $valuse->rowId }}" onclick="var result = document.getElementById('sst{{ $valuse->id }}'); 
                                                         var sst = result.value; 
                                                         if( !isNaN( sst )) result.value++;
                                                         return false;" 
                                          class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button data-rowid="{{ $valuse->rowId }}" onclick="var result = document.getElementById('sst{{ $valuse->id }}'); 
                                                         var sst = result.value; 
                                                         if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;"
                                          class="reduced items-count" type="button" ><i class="lnr lnr-chevron-down"></i></button> --}}
                                    </td>
                                    <td class="product-subtotal">$ {{$valuse->price * $valuse->qty}}</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="icon-pencil"></i></a>
                                        <a href="#"><i class="icon-close"></i></a>
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
                                    <a href="#">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button>Update Shopping Cart</button>
                                    <a href="#">Clear Shopping Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-lm-30px">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Region / State
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select mb-25px">
                                        <label>
                                            * Zip/Postal Code
                                        </label>
                                        <input type="text" />
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lm-30px">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                            </div>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one.</p>
                                <form>
                                    <input type="text" required="" name="name" />
                                    <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-md-30px">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>$260.00</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                </ul>
                            </div>
                            <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                            <a href="#">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection