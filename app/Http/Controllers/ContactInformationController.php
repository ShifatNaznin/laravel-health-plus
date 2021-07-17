<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInformation;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ContactInformationController extends Controller
{
    public function index()
    {
        $value = ContactInformation::orderBy('id', 'DESC')->get();
        return view('admin.contact-information.index', compact('value'));
    }

    public function add()
    {
        return view('admin.contact-information.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
      
         

        ]);
       
        $add = new ContactInformation;
        $add->email = $request->email;

        $add->phone = $request->phone;
        $add->address = $request->address;
        $add->facebook_link = $request->facebook_link;
        $add->twitter_link = $request->twitter_link;
        $add->instragram_link = $request->instragram_link;

    
       

        $add->save();

        if ($add) {
            return redirect()->route('contactinformation')->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = ContactInformation::find($id);
        return view('admin.contact-information.update', compact('data'));
    }
    public function update(Request $request)
    {
        $add = ContactInformation::find($request->id);
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->address = $request->address;
        $add->facebook_link = $request->facebook_link;
        $add->twitter_link = $request->twitter_link;
        $add->instragram_link = $request->instragram_link;
 
     


       

        $add->save();

        if ($add) {
            return back()->with('success', 'value');
        } else {
            return back()->with('error', 'value');
        }

    }

    public function view(Request $request, $id)
    {
        $data = ContactInformation::find($id);
        return view('admin.contact-information.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ContactInformation::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
        return redirect()->route('contactinformation')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }


    

}
