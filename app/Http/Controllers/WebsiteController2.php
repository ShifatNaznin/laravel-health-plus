<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Blog;
use App\Models\Cartlist;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Cart;

class WebsiteController extends Controller
{

    public function index(){
        return view('website.index');
    }
    public function web_about(){
        $item=About::orderBy('id','DESC')->take(1)->get();
        return view('website.about',compact('item'));
        // return Cart::add('293ad', 'Product 1', 1, 9.99);
    }
    public function web_product(){
        $item=Product::orderBy('id','DESC')->get();
        return view('website.product',compact('item'));
    }
    public function web_product_details(Request $request, $id){
        $data=Product::find($id);
        return view('website.product-details',compact('data'));
    }
    public function web_category_products(Request $request, $category){
        $data=Product::find($category);
        // dd($data2->category);
        // $item=Product::where('category',$data2->category)->orderBy('id','DESC')->get();
        return view('website.product-category-products',compact('data'));
    }

    public function web_blog(){
        $item=Blog::orderBy('id','DESC')->get();
        return view('website.blog',compact('item'));
    }
    public function web_blog_details(Request $request, $id){
        $data=Blog::find($id);
        return view('website.blog-details',compact('data'));
    }
    public function web_contact(){
        return view('website.contact');
    }

    // ajax
    public function get_web_subproduct(Request $request)
    {
        $sub_cat_id = $request->sub_cat_id;
        $item = Product::where('sub_category', $sub_cat_id)
            ->get();
        return view('website.product-subcat')->with(compact('item'));
    }


    public function web_cart(){
        $item=Cartlist::orderBy('id','DESC')->get();
        return view('website.cart',compact('item'));
    }


    // ajax
    public function get_cart_product(Request $request){
        // dd($request);
        $add = new Cartlist;
        $add->product_id = $request->cart_id;
        $add->save();
        $list_itme = Cartlist::get();
        $countval = count($list_itme);
        $view = view('website.cart-count')->withCountval($countval) ->render();
        return response()->json([
            'view' => $view,
            'countval' => $countval,
        ]);
    }

    public function web_wishlist(){
        $item=Wishlist::orderBy('id','DESC')->get();
        return view('website.wishlist',compact('item'));
    }

    // ajax
    public function get_wishlist_product(Request $request){
        // dd($request);
        $add = new Wishlist;
        $add->product_id = $request->wishlist_id;
        $add->save();
        $list_itme2 = Wishlist::get();
        $countval2 = count($list_itme2);
        $view2 = view('website.cart-count')->withCountval($countval2)->render();
        return response()->json([
            'view' => $view2,
            'countval2' => $countval2,
        ]);
    }
    // ajax
    public function wishlist_remove(Request $request){
        // dd($request);
       

         $wishlist_remove = $request->wishlist_remove;
        
         $data = Wishlist::findOrFail($wishlist_remove);

         $data->delete();
        // $data->delete();
    //  if($data->delete()){
        $list_itme22 = Wishlist::get();
        $countval22 = count($list_itme22);
        $item=Wishlist::orderBy('id','DESC')->get();
        $view = view('website.wishlist-remove')->withItem($item)->withData($data)->withCountval($countval22)->render();
        return response()->json([
            'view' => $view,
            'countval22' => $countval22,
        ]);
       
        
    }


}