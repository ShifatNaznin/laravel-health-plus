<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\FeaturedProducts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FeaturedProductsController  extends Controller
{
    public function index()
    {
        $value = FeaturedProducts::orderBy('id', 'DESC')->get();
        return view('admin.featured-products.index', compact('value'));
    }

    public function add()
    {
        
        $value = Product::where('f_status',1)->orderBy('id', 'DESC')->get();
        // dd($value);
        return view('admin.featured-products.add', compact('value'));
        // return view('admin.featured-products.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
         

        ]);
       
        $add = new FeaturedProducts;
        $add->product_id = $request->product_id;
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'f_status' => 2,
            ]);
        }
        $add->save();

        if ($add) {
            return redirect()->route('featuredproducts')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

 
    public function update(Request $request)
    {
        $add = FeaturedProducts::find($request->id);
        $add->product_id = $request->product_id;
        $add->status = $request->status;

        $add->save();

        if ($add) {
            return back()->with('success-update', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = FeaturedProducts::find($id);
        return view('admin.featured-products.view', compact('data'));
    }

    public function delete(Request $request)
    {
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'f_status' => 1,
            ]);
        }
        if (isset($request->id)) {
            DB::table('featured_products')->where('id', $request->id)->delete();
        }

        return redirect()->route('featuredproducts')->with('success-del', 'value');
 
    }
}
