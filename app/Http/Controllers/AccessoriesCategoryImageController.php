<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessoriesCategoryImage;
use App\Models\AccessoriesCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AccessoriesCategoryImageController extends Controller
{
    public function index()
    {
        $value = AccessoriesCategoryImage::orderBy('id', 'DESC')->get();
        return view('admin.accessories-category-image.index', compact('value'));
    }

    public function add()
    {
        return view('admin.accessories-category-image.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'image' => 'required',
         

        ]);
       
        $add = new AccessoriesCategoryImage;
        $add->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $user_img_name = $request->file('image');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->image = $user_name;
    
          }

        $add->save();

        if ($add) {
            return redirect()->route('accessories_image')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = AccessoriesCategoryImage::find($id);
        return view('admin.accessories-category-image.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = AccessoriesCategoryImage::find($request->id);
        $add->category_id = $request->category_id;
       
        if($request->hasFile('image')) {
            if(Storage::disk('public')->exists('images/'.$add->image)) Storage::disk('public')->delete('images/'.$add->image);
            $user_img_name = $request->file('image');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->image = $user_name;
    
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
        $data = AccessoriesCategoryImage::find($id);
        return view('admin.accessories-category-image.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = AccessoriesCategoryImage::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('accessories_image')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
