<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AccessoriesCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AccessoriesController  extends Controller
{
    public function index()
    {
        $value = AccessoriesCategory::orderBy('id', 'DESC')->get();
        return view('admin.accessories-category.index', compact('value'));
    }

    public function add()
    {
        $value = Category::where('ac_status',1)->orderBy('id', 'DESC')->get();
        return view('admin.accessories-category.add', compact('value'));
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
        ]);
       
        $add = new AccessoriesCategory;
        $add->category_id = $request->category_id;
        if (isset($request->category_id)) {
            DB::table('categories')->where('id', $request->category_id)->update([
                'ac_status' => 2,
            ]);
        }
        $add->save();

        if ($add) {
            return redirect()->route('accessories')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    public function update(Request $request)
    {
        $add = AccessoriesCategory::find($request->id);
        $add->category_id = $request->category_id;
        $add->status = $request->status;

        $add->save();

        if ($add) {
            return back()->with('success-update', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }



    public function delete(Request $request)
    {
        if (isset($request->category_id)) {
            DB::table('categories')->where('id', $request->category_id)->update([
                'ac_status' => 1,
            ]);
        }
        if (isset($request->id)) {
            DB::table('accessories_categories')->where('id', $request->id)->delete();
        }
        return redirect()->route('accessories')->with('success-del', 'value');
        
    }
}
