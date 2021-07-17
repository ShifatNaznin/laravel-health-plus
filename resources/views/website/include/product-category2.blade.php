<!-- Sidebar Area Start -->
<div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
    <div class="shop-sidebar-wrap">
        <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">
            <h3 class="sidebar-title">Category</h3>
            <div class="accordion" id="accordionExample">
                @php
                $menu=DB::table('products')->get();
                dd( $menu);
                @endphp
                <div class="card">
                    @foreach ($menu as $pcat)
                    @php
  
                    $c=0;
                    $cat=DB::table('categories')->where('id',$pcat->category)->first();
                    $subcat=DB::table('sub_categories')->where('id',$pcat->sub_category)->first();
                    $submenu=DB::table('products')->where('sub_category',$pcat->category)->get();
                    $menucount=DB::table('sub_categories')->where('category',$pcat->category)->count();
                    // dd($menucount);
                    @endphp

                    <div class="card-header" id="headingOne{{$pcat->category}}">
                        <a href="#" data-toggle="collapse" data-target="#collapseOne{{$pcat->category}}"
                            aria-expanded="false" aria-controls="collapseOne{{$pcat->category}}"
                            class="collapsed">{{$cat->category ?? NUll}} ({{$menucount}})</a>
                    </div>

                    <div id="collapseOne{{$pcat->category}}" class="collapse"
                        aria-labelledby="headingOne{{$pcat->category}}" data-parent="#accordionExample" style="">
                        <div class="card-body">
                            <ul class="category-list">
                                {{-- @if (isset($pcat->category)) --}}
                                @php
                                    $parent=App\Models\SubCategory::where('category',$pcat->category)->get()
                                @endphp
                                @foreach($parent as $child)
                                @php
                                // dd($child->id);
                                $smenucount=DB::table('products')->where('sub_category',$child->id)->count();
                                $subcatid=DB::table('sub_categories')->where('id',$pcat->sub_category)->first();
                                @endphp
                                <li>
                                    <a id="sub_cat" href="javascript:void(0)">
                                        <input type="hidden" value="{{$child->id}}">
                                        {{$child->subcategory}} ({{$smenucount}})
                                        
                                    </a>
                                </li>
                                @endforeach
                                {{-- @endif --}}


                            </ul>
                        </div>
                    </div>

                    @php
                    $c++;
                    @endphp
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>