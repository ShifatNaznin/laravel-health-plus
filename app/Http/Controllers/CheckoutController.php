<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\About;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\CheckoutInformation;
use App\Models\ContactMessage;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Cartlist;
use App\Models\Wishlist;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\CheckOut;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Cart;

class CheckoutController extends Controller
{



    public function checkout_save(Request $request){
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
      
         

        ]);
       
        $add = new CheckoutInformation;
        $add->f_name = $request->f_name;
        $add->l_name = $request->l_name;
        $add->c_name = $request->c_name;
        $add->email = $request->email;

        $add->phone = $request->phone;
        $add->address = $request->address;
        $add->city = $request->city;
        $add->zip = $request->zip;
        $add->other_information = $request->other_information;
         $add->save();

        $order = new Order();
        $order->order_total = Cart::total();
        $order->checkout_id = $add->id;
        $order->save();

        foreach(Cart::content() as $item){
            $order_details = new OrderDetails();
            $order_details->order_id = $order->id;
            $order_details->product_id = $item->id;
            $order_details->product_name = $item->name;
            $order_details->qty = $item->qty;
            $order_details->price = $item->price;
            $order_details->checkout_id = $add->id;
            // $order_details->slug = uniqid(10);
            $order_details->save();
        }

        Cart::destroy();
        Session::forget('checkoutinfo');

        return redirect()->route('order_complete_message');
    }

    public function order_complete_message()
    {
     
        return view('website.thankyou-msg');
    }

}