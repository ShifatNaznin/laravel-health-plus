<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Order;
use App\Models\CheckoutInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class OrderInformationController extends Controller
{
    public function index()
    {
        $value = OrderDetails::orderBy('id', 'DESC')->get();
        return view('admin.order-details.index', compact('value'));
    }
    public function order_information()
    {
        $value = Order::orderBy('id', 'DESC')->get();
        return view('admin.order-details.order-information', compact('value'));
    }
    public function checkout_information()
    {
        $value = CheckoutInformation::orderBy('id', 'DESC')->get();
        return view('admin.order-details.checkout-information', compact('value'));
    }


    public function view(Request $request, $id)
    {
        $data = ContactMessage::find($id);
        return view('admin.order-details.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ContactMessage::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('orderlist')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    

}
