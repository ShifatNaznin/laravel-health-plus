<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $value = BlogCategory::orderBy('id', 'DESC')->get();
        return view('admin.blog-category.index', compact('value'));
    }

    public function add()
    {
        return view('admin.blog-category.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'blogcategory' => 'required',
         

        ]);
       
        $add = new BlogCategory;
        $add->blogcategory = $request->blogcategory;


        $add->save();

        if ($add) {
            return redirect()->route('blogcategory')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = BlogCategory::find($id);
        return view('admin.blog-category.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = BlogCategory::find($request->id);
        $add->blogcategory = $request->blogcategory;
       

        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = BlogCategory::find($id);
        return view('admin.blog-category.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = BlogCategory::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('blogcategory')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
