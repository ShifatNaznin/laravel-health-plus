<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $value = About::orderBy('id', 'DESC')->get();
        return view('admin.about.index', compact('value'));
    }

    public function add()
    {
        return view('admin.about.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
         

        ]);
       
        $add = new About;
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
            return redirect()->route('about')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = About::find($id);
        return view('admin.about.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = About::find($request->id);
        $add->heading = $request->heading;
        $add->sub_heading = $request->sub_heading;
 
     
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
        $data = About::find($id);
        return view('admin.about.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = About::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('about')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
