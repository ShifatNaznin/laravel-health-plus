<!-- Banner Area Start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            @php
            $banadd=App\Models\AddBanner::orderBy('id','ASC')->take(3)->get();
            @endphp

            @foreach ($banadd as $data)
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper banner-wrapper-two">
                    <a href="#"><img src="{{ asset('/images/'.$data->image) }}" alt="" /></a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Banner Area End -->