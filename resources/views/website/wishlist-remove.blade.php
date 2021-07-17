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
        <a href="#">add to cart</a>
    </td>
</tr>
@empty
<div class="alert alert-primary" role="alert">
    No Product!!
</div>
@endforelse

@else

@endif
