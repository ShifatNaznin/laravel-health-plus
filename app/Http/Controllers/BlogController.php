<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $value = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index', compact('value'));
    }

    public function add()
    {
        return view('admin.blog.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'blogcategory' => 'required',
         

        ]);
       
        $add = new Blog;
        $add->blogcategory = $request->blogcategory;
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
            return redirect()->route('blog')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = Blog::find($id);
        return view('admin.blog.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = Blog::find($request->id);
        $add->heading = $request->heading;
        $add->sub_heading = $request->sub_heading;
        $add->blogcategory = $request->blogcategory;
     
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
        $data = Blog::find($id);
        return view('admin.blog.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = Blog::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('blog')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
