<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\RecentlyAdded;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class RecentlyAddedController  extends Controller
{
    public function index()
    {
        $value = RecentlyAdded::orderBy('id', 'DESC')->get();
        return view('admin.recently-added.index', compact('value'));
    }

    public function add()
    {
        
        $value = Product::where('rd_status',1)->orderBy('id', 'DESC')->get();
        // dd($value);
        return view('admin.recently-added.add', compact('value'));
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
         

        ]);
       
        $add = new RecentlyAdded;
        $add->product_id = $request->product_id;
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'rd_status' => 2,
            ]);
        }
        $add->save();

        if ($add) {
            return redirect()->route('recentlyadded')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

 
    public function update(Request $request)
    {
        $add = RecentlyAdded::find($request->id);
        $add->product_id = $request->product_id;
        $add->status = $request->status;

        $add->save();

        if ($add) {
            return back()->with('success-update', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = RecentlyAdded::find($id);
        return view('admin.recently-added.view', compact('data'));
    }

    public function delete(Request $request)
    {
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'rd_status' => 1,
            ]);
        }
        if (isset($request->id)) {
            DB::table('recently_addeds')->where('id', $request->id)->delete();
        }

        return redirect()->route('recentlyadded')->with('success-del', 'value');
 
    }
}
