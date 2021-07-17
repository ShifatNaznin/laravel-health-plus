<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $value = Banner::orderBy('id', 'DESC')->get();
        return view('admin.banner.index', compact('value'));
    }

    public function add()
    {
        return view('admin.banner.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
         

        ]);
       
        $add = new Banner;
        $add->heading = $request->heading;

        $add->sub_heading = $request->sub_heading;

      
        if($request->hasFile('image')) {
            $user_img_name = $request->file('image');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->image = $user_name;
    
          }

        $add->save();

        if ($add) {
            return redirect()->route('banner')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = Banner::find($id);
        return view('admin.banner.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = Banner::find($request->id);
        $add->heading = $request->heading;
        $add->sub_heading = $request->sub_heading;
 
        // if ($request->hasFile('image')) {
        //     if(Storage::disk('public')->exists('images/'.$post->image)) Storage::disk('public')->delete('images/'.$post->image);
        //     $file = $request->file('image');
        //     $path = Storage::put('images/', $file);
        //     $add->image = $path;
        // }
     
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
        $data = Banner::find($id);
        return view('admin.banner.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = Banner::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('banner')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
