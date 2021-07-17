<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ContactMessageController extends Controller
{
    public function index()
    {
        $value = ContactMessage::orderBy('id', 'DESC')->get();
        return view('admin.contact-message.index', compact('value'));
    }


    public function view(Request $request, $id)
    {
        $data = ContactMessage::find($id);
        return view('admin.contact-message.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ContactMessage::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('contactmessages')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    

}
