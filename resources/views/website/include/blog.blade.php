<div class="feature-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">LATEST BLOG POSTS
                    </h2>
                </div>
            </div>
        </div>
        <div class="feature-slider slider-nav-style-1">
            <div class="feature-slider-wrapper swiper-wrapper">
                @php
                $blog=App\Models\Blog::get();
                @endphp

                @foreach ($blog as $data)
                <div class="feature-slider-item swiper-slide">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('web_blog_details',$data->id)}}" class="thumbnail">
                                <img class="first-img"
                                    src="{{ asset('/images/'.$data->image) }}" alt="" />
                            </a>
                           
                        </div>
                        <div class="product-decs">
                            <div class="blog-post-content-inner mt-30px">
                                <a class="inner-link" href="{{route('web_blog_details',$data->id)}}"><span>{{$data->heading}}</span></a>

                                <ul class="blog-page-meta">
                                    <li>
                                        <a href="#"><i class="ion-person"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                    </li>
                                </ul>
                                <a class="read-more-btn" href="{{route('web_blog_details',$data->id)}}"> Read More <i
                                        class="ion-android-arrow-dropright-circle"></i></a>
                            </div>
                        </div>

                    </article>
                </div>

                @endforeach


            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->