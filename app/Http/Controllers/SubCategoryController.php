<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    public function index()
    {
        $value = SubCategory::orderBy('id', 'DESC')->get();
        return view('admin.sub-category.index', compact('value'));
    }

    public function add()
    {
        return view('admin.sub-category.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'subcategory' => 'required',
         

        ]);
       
        $add = new SubCategory;
        $add->category = $request->category;
        $add->subcategory = $request->subcategory;


        $add->save();

        if ($add) {
            return redirect()->route('subcategory')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = SubCategory::find($id);
        return view('admin.sub-category.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = SubCategory::find($request->id);
        $add->category = $request->category;
        $add->subcategory = $request->subcategory;
       

        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = SubCategory::find($id);
        return view('admin.sub-category.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = SubCategory::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('subcategory')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
