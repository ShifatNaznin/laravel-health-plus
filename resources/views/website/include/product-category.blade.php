<!-- Sidebar Area Start -->
<div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
    <div class="shop-sidebar-wrap">
        <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">
            <h3 class="sidebar-title">Category</h3>
            <div class="accordion" id="accordionExample">
                @php
                $catdata=DB::table('categories')->get();
                // dd( $catdata);
                @endphp
                <div class="card">
                    @foreach ($catdata as $pcat)
                    @php
                    // dd($child->id);
                    // $psubcat=DB::table('products')->where('sub_category',$child->id)->count();

                    $parent=App\Models\SubCategory::where('category',$pcat->id)->get();

                    // dd($parent);

                    // @php

                    // $c=0;
                    // $cat=DB::table('categories')->where('id',$pcat->category)->first();
                    // $subcat=DB::table('sub_categories')->where('id',$pcat->sub_category)->first();
                    // $submenu=DB::table('products')->where('sub_category',$pcat->category)->get();
                    $menucount=DB::table('sub_categories')->where('category',$pcat->id)->count();
                    // dd($menucount);
                    @endphp


                    {{-- @php
                    $prodata=App\Models\Product::where('category',$pcat->id)->get();
                    @endphp
                    @foreach ($prodata as $pcatdata) --}}

                    <div class="card-header" id="headingOne{{$pcat->id}}">
                        <a href="{{route('web_category_products',$pcat->id)}}" data-toggle="collapse"
                            data-target="#collapseOne{{$pcat->id}}" aria-expanded="false"
                            aria-controls="collapseOne{{$pcat->id}}" class="collapsed">{{$pcat->category}}
                            ({{$menucount}})

                        </a>
                    </div>

                    {{-- @endforeach --}}

                    <div id="collapseOne{{$pcat->id}}" class="collapse" aria-labelledby="headingOne{{$pcat->id}}"
                        data-parent="#accordionExample" style="">
                        <div class="card-body">
                            <ul class="category-list">
                                @if (isset($pcat->id))
                                {{-- @php
                                    $parent=App\Models\Category::where('category',$pcat->category)->get()
                                @endphp --}}

                                @foreach($parent as $child)



                                <li>
                                    <a class="subcat" href="javascript:void(0)">
                                        <input type="hidden" value="{{$child->id}}">
                                        {{$child->subcategory}}

                                    </a>
                                </li>
                                {{-- @php
                                     $subcat=DB::table('sub_categories')->where('id',$child->id)->first();
                                @endphp
                                <li>
                                    <a id="sub_cat" href="javascript:void(0)">
                                        <input type="hidden" value="{{$subcat->id}}">
                                {{$subcat->subcategory}}

                                </a>
                                </li> --}}
                                @endforeach
                                @endif


                            </ul>
                        </div>
                    </div>


                    @php

                    @endphp
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
