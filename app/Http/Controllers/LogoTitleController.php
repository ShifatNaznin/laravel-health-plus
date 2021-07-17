<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Logo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class LogoTitleController extends Controller
{
    public function index(){
        $value=Logo::orderBy('id','DESC')->get();
        return view('admin.logo.index',compact('value'));
    }

    public function add() {
        return view('admin.logo.add');
    }

  
    public function insert(Request $request) {
        $this->validate($request, [ 
            'title'=>'required',


            ]);
        $add=new Logo;
        $add->title=$request->title;


        if($request->hasFile('logo')) {
            $user_img_name = $request->file('logo');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->logo = $user_name;
    
          }
          if($request->hasFile('icon')) {
            $user_img_name = $request->file('icon');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->icon = $user_name;
    
          }
   

        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function view(Request $request, $id) {
        $data=Logo::find($id);
        return view('admin.logo.view', compact('data'));
    }

    public function edit(Request $request, $id) {
        $data=Logo::find($id);
        return view('admin.logo.update', compact('data'));
    }

    public function update(Request $request) {
        $add=Logo::find($request->id);
        $add->title=$request->title;



        if($request->hasFile('logo')) {
            if(Storage::disk('public')->exists('logos/'.$add->logo)) Storage::disk('public')->delete('logos/'.$add->logo);
            $user_img_name = $request->file('logo');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->logo = $user_name;
    
          } if($request->hasFile('icon')) {
            if(Storage::disk('public')->exists('icons/'.$add->icon)) Storage::disk('public')->delete('icons/'.$add->icon);
            $user_img_name = $request->file('icon');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);
    
            $add->icon = $user_name;
    
          }
    

        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function delete(Request $request, $id)
    {
        $data = Logo::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('logo')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}