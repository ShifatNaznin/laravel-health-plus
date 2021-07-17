<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\FooterOne;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FooterOneController extends Controller
{
    public function index(){
        $value=FooterOne::orderBy('id','ASC')->get();
        return view('admin.footer-one.index',compact('value'));
    }

    public function add() {
        return view('admin.footer-one.add');
    }

  
    public function insert(Request $request) {
        $add=new FooterOne;
        $add->name=$request->name;
        $add->details=$request->details;
        


        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function view(Request $request, $id) {
        $data=FooterOne::find($id);
        return view('admin.footer-one.view', compact('data'));
    }

    public function edit(Request $request, $id) {
        $data=FooterOne::find($id);
        return view('admin.footer-one.update', compact('data'));
    }

    public function update(Request $request) {
        $add=FooterOne::find($request->id);
        $add->name=$request->name;
        $add->details=$request->details;


        $add->save();

        if($add) {
            return back()->with('success', 'value');
        }

        else {
            return back()->with('error', 'value');
        }
    }

    public function delete(Request $request, $id) {
        $data = FooterOne::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('footer_one')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

  
}