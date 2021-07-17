{{-- @php

$wishlist = DB::table('wishlists')->get();

@endphp

<a href="#offcanvas-wishlist" class="heart"><i class="icon-heart"></i> <span id="wishlistcount">{{count($wishlist)}}</span>
</a> --}}

@php
// $cartss = DB::table('cartlists')->get();
// $wishlist = DB::table('wishlists')->get();
$auth_user = Auth::user();
// dd(Auth::user());
@endphp
@if(isset($auth_user))
@php
$wishlist = DB::table('wishlists')->where('user_id', $auth_user->id)->get();

@endphp

<a href="{{route('web_wishlist')}}" class="heart"
    style="color:#0b2239 !important;"><i class="icon-heart"></i>
    <span id="wishlistcount">{{count($wishlist)}}</span>
</a>
@else
<a href="{{route('web_wishlist')}}" class="heart"
    style="color:#0b2239 !important;"><i class="icon-heart"></i>
    <span id="wishlistcount">0</span>
</a>
@endif
