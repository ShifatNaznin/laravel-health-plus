<!-- Slider Start -->
<div class="slider-area slider-height-1">
    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">
            <!-- Single Slider  -->
            @php
            $ban=App\Models\Banner::get();
            @endphp

            @foreach ($ban as $data)
            <div class="swiper-slide bg-img d-flex"
                style="background-image: url({{ asset('/images/'.$data->image) }});">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                        <span class="animated color-gray">{{$data->heading}}</span>
                        <h1 class="animated color-black">

                            <strong>{!!$data->sub_heading!!}</strong>
                        </h1>
                        <a href="#" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Single Slider  -->
            {{-- <div class="swiper-slide bg-img d-flex"
                style="background-image: url({{asset('contents/website')}}/assets/images/slider-image/sample-1.jpg);">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                        <span class="animated color-gray">NEW Arrival</span>
                        <h1 class="animated color-black">
                            <!-- Bluetooth Gamepad <br /> -->
                            <strong>Protective Surgical Mask</strong>
                        </h1>
                        <a href="#" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div> --}}
            <!-- Single Slider  -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
    </div>
</div>
<!-- Slider End -->