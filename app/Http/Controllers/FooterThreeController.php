<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\FooterThree;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FooterThreeController extends Controller
{
    public function index(){
        $value=FooterThree::orderBy('id','ASC')->get();
        return view('admin.footer-three.index',compact('value'));
    }

    public function add() {
        return view('admin.footer-three.add');
    }

  
    public function insert(Request $request) {
        $add=new FooterThree;
        $add->name=$request->name;
        $add->link=$request->link;
        


        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function view(Request $request, $id) {
        $data=FooterThree::find($id);
        return view('admin.footer-three.view', compact('data'));
    }

    public function edit(Request $request, $id) {
        $data=FooterThree::find($id);
        return view('admin.footer-three.update', compact('data'));
    }

    public function update(Request $request) {
        $add=FooterThree::find($request->id);
        $add->name=$request->name;
        $add->link=$request->link;


        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function delete(Request $request, $id) {
        $data = FooterThree::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('footer_three')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

  
}