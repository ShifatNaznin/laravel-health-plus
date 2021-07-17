<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class SubscribeController extends Controller
{
    public function index()
    {
        $value = Subscribe::orderBy('id', 'DESC')->get();
        return view('admin.subscribe-list.index', compact('value'));
    }


    public function view(Request $request, $id)
    {
        $data = Subscribe::find($id);
        return view('admin.subscribe-list.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = Subscribe::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('subscribe')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    

}
