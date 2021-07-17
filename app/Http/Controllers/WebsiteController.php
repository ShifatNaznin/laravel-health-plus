<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Cartlist;
use App\Models\ContactMessage;
use App\Models\Subscribe;
use App\Models\Wishlist;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function loginweb(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                // Session::put('frontSession',$data['email']);
                // return $this->authenticated($request, $this->guard()->user())
                // ?: redirect()->intended($this->redirectPath());
                return redirect('/');
            } else {
                return redirect('logintwo')->with('error', 'Invalid User Or Password');
            }
        }
    }
    public function web_about()
    {
        $item = About::orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return view('website.about', compact('item'));
        // return Cart::add('293ad', 'Product 1', 1, 9.99);
    }
    public function web_checkout()
    {
        if (Auth::user()) {
            return view('website.checkout');
        } else {
            return redirect('logintwo')->with('error', 'Invalid User Or Password');
        }
    }
    public function web_product()
    {
        $item = Product::orderBy('id', 'DESC')->get();
        return view('website.product', compact('item'));
    }
    public function web_product_details(Request $request, $id)
    {
        $data = Product::find($id);
        return view('website.product-details', compact('data'));
    }
    public function web_category_products(Request $request, $category)
    {
        $data = Category::find($category);
        // dd($data2->category);
        // $item=Product::where('category',$data2->category)->orderBy('id','DESC')->get();
        return view('website.product-category-products', compact('data'));
    }

    public function web_blog()
    {
        $item = Blog::orderBy('id', 'DESC')->get();
        return view('website.blog', compact('item'));
    }
    public function web_blog_details(Request $request, $id)
    {
        $data = Blog::find($id);
        return view('website.blog-details', compact('data'));
    }
    public function web_contact()
    {
        return view('website.contact');
    }

    public function contact_msg(Request $request)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $add = new ContactMessage();
        $add->f_name = $request->f_name;
        $add->l_name = $request->l_name;
        $add->email = $request->email;

        $add->phone = $request->phone;
        $add->message = $request->message;
        $add->subject = $request->subject;

        $add->save();

        if ($add) {
            return redirect()
                ->route('web_contact')
                ->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    // ajax
    public function get_web_subproduct(Request $request)
    {
        $sub_cat_id = $request->sub_cat_id;
        $item = Product::where('sub_category', $sub_cat_id)->get();
        return view('website.product-subcat')->with(compact('item'));
    }

    public function add_subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $newEmail = $request->email;
        $existEmail = Subscribe::where('email', $newEmail)->first();
        // dd($existEmail);
        if (isset($existEmail)) {
            Session::flash(
                'success',
                '<h4><i class="icon fa fa-ban"></i> Alert!</h4>
                This email already exists !!!'
            );
            return back();
        } else {
            $data = new Subscribe();
            $data->email = $newEmail;
            $data->save();

            $send_email='shifatnaznin11@gmail.com';
            Mail::to($send_email)->send(new SubscribeMail($data));
            Session::flash(
                'success',
                'Thank you for Subscribing'
            );
            return back();
        }
    }

    public function logintwo()
    {
        return view('website.login-two');
    }

    // public function web_cart(){
    //     $item=Cartlist::orderBy('id','DESC')->get();
    //     return view('website.cart',compact('item'));
    // }

    // ajax
    public function get_cart_product()
    {
        // dd($request);
        // $add = new Cartlist;
        // $add->product_id = $request->cart_id;
        // $add->save();
        // $list_itme = Cart::count();
        // $countval = count($list_itme);
        // $view = view('website.cart-count')->withCountval($countval) ->render();
        // return response()->json([
        //     'view' => $view,
        //     'countval' => $countval,
        // ]);

        return view('website.cart-count');
    }

    public function web_wishlist()
    {
        return view('website.wishlist');
    }

    // ajax
    public function get_wishlist_product(Request $request)
    {
        if (Auth::user()) {
            // dd($request);
            $add = new Wishlist();
            $add->product_id = $request->wishlist_id;
            $add->user_id = Auth::user()->id;
            $add->save();
            $list_itme2 = WishList::where('user_id', Auth::user()->id)->get();
            // $list_itme2 = Wishlist::get();
            $countval2 = count($list_itme2);
            $view2 = view('website.wishlist-count')
                ->withCountval($countval2)
                ->render();
            return response()->json([
                'view' => $view2,
                'countval2' => $countval2,
            ]);
        } else {
            return 'not_login';
        }
    }
    // ajax
    public function wishlist_remove(Request $request)
    {
        // dd($request);
        if (Auth::user()) {
            $wishlist_remove = $request->wishlist_remove;

            $data = Wishlist::findOrFail($wishlist_remove);

            $data->delete();
            // $data->delete();
            //  if($data->delete()){
            $list_itme22 = WishList::where('user_id', Auth::user()->id)->get();
            $countval22 = count($list_itme22);
            $item = Wishlist::orderBy('id', 'DESC')->get();
            $view = view('website.wishlist-remove')
                ->withItem($item)
                ->withData($data)
                ->withCountval($countval22)
                ->render();
            return response()->json([
                'view' => $view,
                'countval22' => $countval22,
            ]);
        } else {
            return 'not_login';
        }
    }

    public function web_cart()
    {
        // Cart::destroy();
        $item = Cart::content();
        return view('website.cart', compact('item'));
    }

    // add to cart ajax
    public function addto_cart(Product $product, Request $request)
    {

        // dd($request);
        // Cart::destroy();
        // $val= $product->image;
        // $v=json_decode($val);
        // return $product;
        // return $request;
        $added = Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->qty ?: 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['image' => $product->image],
        ]);

        if ($added) {
            return response()->json(['success' => $product->name . ' successfully add to your cart']);
            // return redirect();
        }
    }

    public function cartpage()
    {
        return view('website.cart-page');
    }

    public function cart_update_page()
    {
        $item = Cart::content();
        return view('website.cart-update-page', compact('item'));
    }
    public function cartUpdate(Request $request)
    {
        $qty = $request->qty;
        $rowid = $request->rowid;

        $update = Cart::update($rowid, $qty);
        if ($update) {
            return response()->json(['success' => 'Cart successfully updated!']);
        }
    }

    public function cart_product_remove($rowid)
    {
        Cart::remove($rowid);
        return response()->json(['success' => 'REMOVED!']);
    }

    // new

    public function single_cartadd_and_redirect(Product $product, Request $request)
    {

        //   Cart::destroy();
        $cartredi = Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->qty ?: 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['image' => $product->photo],
        ]);

        if ($cartredi) {
            // return response()->json(['success'  => 'successfully add to your cart']);
            return redirect()->route('cart');
        }
    }
}
