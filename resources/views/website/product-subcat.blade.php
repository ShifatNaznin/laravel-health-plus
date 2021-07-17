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
                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                        <li>
                            <a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a>
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
