<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddBanner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AddBannerController extends Controller
{
    public function index()
    {
        $value = AddBanner::orderBy('id', 'DESC')->get();
        return view('admin.add-banner.index', compact('value'));
    }

    public function add()
    {
        return view('admin.add-banner.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
         

        ]);
       
        $add = new AddBanner;

        if($request->hasFile('image')) {
            $user_img_name = $request->file('image');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->image = $user_name;
    
          }

        $add->save();

        if ($add) {
            return redirect()->route('addbanner')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = AddBanner::find($id);
        return view('admin.add-banner.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = AddBanner::find($request->id);
   
     
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
        $data = AddBanner::find($id);
        return view('admin.add-banner.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = AddBanner::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('addbanner')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
