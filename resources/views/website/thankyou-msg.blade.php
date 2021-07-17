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
                        <li>Thank You</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Thank You area start -->
<div class="thank-you-area mtb-60px">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="inner_complated">
                    <div class="img_cmpted"><img src="{{asset('contents/website')}}/assets/images/icons/cmpted_logo.png" alt=""></div>
                    <p class="dsc_cmpted">Thank you for ordering in our store. You will receive a confirmation
                        email shortly.</p>
                    <div class="btn_cmpted">
                        {{-- <a href="shop-4-column.html" class="shop-btn" title="Go To Shop">Continue Shopping </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thank You area end -->
@endsection