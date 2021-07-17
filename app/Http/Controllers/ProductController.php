<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $value = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('value'));
    }

    public function add()
    {
        return view('admin.product.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'price' => 'required',
            'image' => 'required',


        ]);

        $add = new Product;
        $add->name = $request->name;

        $add->category = $request->category;
        $add->sub_category = $request->sub_category;
        $add->price = $request->price;
        $add->details = $request->details;
        $add->description = $request->description;

        if ($request->hasfile('image')) {

            foreach ($request->file('image') as $file) {

                $name = time().'.'.$file->getClientOriginalName();
                $file->move(public_path() . '/images', $name);
                $data[] = $name;
            }
        }
        else {
            $data = '{}';
        }
        $add->image = json_encode($data);


        $add->save();

        if ($add) {
            return redirect()->route('product')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = Product::find($id);
        return view('admin.product.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = Product::find($request->id);
        $add->name = $request->name;
        $add->category = $request->category;
        $add->sub_category = $request->sub_category;
        $add->price = $request->price;
        $add->details = $request->details;
        $add->description = $request->description;


        if ($request->hasfile('image')) {

            foreach ($request->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/images', $name);
                $data[] = $name;
                $add->image = json_encode($data);
            }
        }
        else {
            $data = '{}';
        }



        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = Product::find($id);
        return view('admin.product.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = Product::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('product')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }



    public function get_product_subcat($id)
    {

        $data = Category::find($id);
        // dd($data);
        // $val=$data->category;
        $cat=DB::table('sub_categories')->where('category',$data->id)->get();
        // dd($cat);
        $options = '';
        foreach ($cat as $item) {

                $options.= "<option value='$item->id'>$item->subcategory</option>";


        }
        // dd($options);
        return response()->json($options);

    }
}
