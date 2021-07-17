<!-- Sidebar Area Start -->
<div class="col-lg-3 col-md-12">
    <div class="left-sidebar shop-sidebar-wrap">
        <!-- Sidebar single item -->
        <div class="sidebar-widget">
            <h3 class="sidebar-title">Search</h3>
            <div class="search-widget">
                <form action="#">
                    <input placeholder="Search entire store here ..." type="text" />
                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
        </div>
        <!-- Sidebar single item -->
        <!-- Sidebar single item -->
        @php
        $menu=DB::table('blogs')->get();
        // dd( $cat);
        @endphp
         
        <div class="sidebar-widget mt-40px">
            <h3 class="sidebar-title">Categories</h3>
            <div class="category-post">
                <ul>
                    @foreach ($menu as $bcat)
                    @php
                 
                    $cat=DB::table('blog_categories')->where('id',$bcat->blogcategory)->first();
                    $countcat=DB::table('blog_categories')->where('id',$bcat->blogcategory)->count();
                    @endphp

                    <li><a href="#">{{$cat->blogcategory}} ({{$countcat}})</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
      

    </div>
</div>
<!-- Sidebar Area End -->