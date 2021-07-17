<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('user'));
    }

    public function add()
    {
        return view('admin.user.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        $add = new User;
        $add->name = $request->name;

        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->user_role = $request->user_role;
        $add->password = Hash::make($request->get('password'));
        // $add->role_id = $request->role_id;

        // $add->last_name = $request->last_name;
        // $add->phone_two = $request->phone_two;
        // $add->country = $request->country;
        // $add->address = $request->address;

        // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $image_name = str_replace(' ', '_', substr($request->name, 0, 5)) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        //     $image = Image::make($file);

        //     $image->resize(512, 512, function ($constraint) {
        //         $constraint->aspectRatio();
        //     }

        //     );

        //     $img_canvas = Image::canvas(512, 512);
        //     $img_canvas->insert($image, 'center');
        //     $img_canvas->save(base_path('public/uploads/images/' . $image_name));
        //     $add->photo = $image_name;
        // }

        $add->save();

        if ($add) {
            return back()->route('user')->withwith('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);
        return view('admin.user.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = User::find($request->id);
        $add->name = $request->name;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->user_role = $request->user_role;
        if ($request->get('password') == '') {
            $add->update($request->except('password'));
        } else {
            $add->password = Hash::make($request->get('password'));
        }
        // $add->role_id = $request->role_id;

        // $add->last_name = $request->last_name;
        // $add->phone_two = $request->phone_two;
        // $add->country = $request->country;
        // $add->address = $request->address;

        // if ($request->hasFile('photo')) {
        //     if (Storage::disk('public')->exists('uploads/images/' . $add->photo)) {
        //         Storage::disk('public')->delete('uploads/photo/' . $add->photo);
        //     }

        //     $file = $request->file('photo');
        //     $image_name = str_replace(' ', '_', substr($request->product_name, 0, 5)) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        //     $image = Image::make($file);

        //     $image->resize(512, 512, function ($constraint) {
        //         $constraint->aspectRatio();
        //     }

        //     );

        //     $img_canvas = Image::canvas(512, 512);
        //     $img_canvas->insert($image, 'center');
        //     $img_canvas->save(base_path('public/uploads/images/' . $image_name));
        //     $add->photo = $image_name;
        // }

        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = User::find($id);
        return view('admin.user.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
            return back()->route('user')->withwith('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}
