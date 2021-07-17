<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MedicalEquipmentCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MedicalEquipmentController  extends Controller
{
    public function index()
    {
        $value = MedicalEquipmentCategory::orderBy('id', 'DESC')->get();
        return view('admin.medical-equipment-category.index', compact('value'));
    }

    public function add()
    {
        $value = Category::where('me_status',1)->orderBy('id', 'DESC')->get();
        return view('admin.medical-equipment-category.add', compact('value'));
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
        ]);
       
        $add = new MedicalEquipmentCategory;
        $add->category_id = $request->category_id;
        if (isset($request->category_id)) {
            DB::table('categories')->where('id', $request->category_id)->update([
                'me_status' => 2,
            ]);
        }
        $add->save();

        if ($add) {
            return redirect()->route('equipmentcategory')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    public function update(Request $request)
    {
        $add = MedicalEquipmentCategory::find($request->id);
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
                'me_status' => 1,
            ]);
        }
        if (isset($request->id)) {
            DB::table('medical_equipment_categories')->where('id', $request->id)->delete();
        }
        return redirect()->route('equipmentcategory')->with('success-del', 'value');
        
    }
}
