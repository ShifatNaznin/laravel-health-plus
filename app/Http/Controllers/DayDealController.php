<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DayDeal;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DayDealController  extends Controller
{
    public function index()
    {
        $value = DayDeal::orderBy('id', 'DESC')->get();
        return view('admin.day-deal.index', compact('value'));
    }

    public function add()
    {
        $value = Product::where('d_status',1)->orderBy('id', 'DESC')->get();
        return view('admin.day-deal.add', compact('value'));
        // return view('admin.day-deal.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
         

        ]);
       
        $add = new DayDeal;
        $add->product_id = $request->product_id;
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'd_status' => 2,
            ]);
        }
        $add->save();

        if ($add) {
            return redirect()->route('daydeal')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

  
    public function update(Request $request)
    {
        $add = DayDeal::find($request->id);
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
        $data = DayDeal::find($id);
        return view('admin.day-deal.view', compact('data'));
    }

    public function delete(Request $request)
    {
        if (isset($request->product_id)) {
            DB::table('products')->where('id', $request->product_id)->update([
                'd_status' => 1,
            ]);
        }
        if (isset($request->id)) {
            DB::table('day_deals')->where('id', $request->id)->delete();
        }
        return redirect()->route('daydeal')->with('success-del', 'value');
       
    }
}
