<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $value = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('value'));
    }

    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',


        ]);

        $add = new Category;
        $add->category = $request->category;


        $add->save();

        if ($add) {
            return redirect()->route('category')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = Category::find($id);
        return view('admin.category.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = Category::find($request->id);
        $add->category = $request->category;


        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = Category::find($id);
        return view('admin.category.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = Category::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('category')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
