<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalEquipmentCategoryImage;
use App\Models\MedicalEquipmentCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EquipmentCategoryImageController extends Controller
{
    public function index()
    {
        $value = MedicalEquipmentCategoryImage::orderBy('id', 'DESC')->get();
        return view('admin.medical-equipment-image.index', compact('value'));
    }

    public function add()
    {
        return view('admin.medical-equipment-image.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'image' => 'required',
         

        ]);
       
        $add = new MedicalEquipmentCategoryImage;
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
            return redirect()->route('equipmentcategory_image')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = MedicalEquipmentCategoryImage::find($id);
        return view('admin.medical-equipment-image.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = MedicalEquipmentCategoryImage::find($request->id);
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
        $data = MedicalEquipmentCategoryImage::find($id);
        return view('admin.medical-equipment-image.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = MedicalEquipmentCategoryImage::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('equipmentcategory_image')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
