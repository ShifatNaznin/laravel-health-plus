<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserRoleController extends Controller
{
    public function index()
    {
        $value = UserRole::orderBy('id', 'DESC')->get();
        return view('admin.user-role.index', compact('value'));
    }

    public function add()
    {
        return view('admin.user-role.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'u_role' => 'required',
         

        ]);
       
        $add = new UserRole;
        $add->u_role = $request->u_role;


        $add->save();

        if ($add) {
            return redirect()->route('userrole')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = UserRole::find($id);
        return view('admin.user-role.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = UserRole::find($request->id);
        $add->u_role = $request->u_role;
       

        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = UserRole::find($id);
        return view('admin.user-role.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = UserRole::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('userrole')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
