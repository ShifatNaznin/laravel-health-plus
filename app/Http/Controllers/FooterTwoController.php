<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\FooterTwo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FooterTwoController extends Controller
{
    public function index(){
        $value=FooterTwo::orderBy('id','ASC')->get();
        return view('admin.footer-two.index',compact('value'));
    }

    public function add() {
        return view('admin.footer-two.add');
    }

  
    public function insert(Request $request) {
        $add=new FooterTwo;
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
        $data=FooterTwo::find($id);
        return view('admin.footer-two.view', compact('data'));
    }

    public function edit(Request $request, $id) {
        $data=FooterTwo::find($id);
        return view('admin.footer-two.update', compact('data'));
    }

    public function update(Request $request) {
        $add=FooterTwo::find($request->id);
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
        $data = FooterTwo::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('footer_two')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

  
}