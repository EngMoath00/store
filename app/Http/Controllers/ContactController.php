<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        //
        $categories = category::all();
        return view('front.contact', compact('categories'));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'subject' => 'required|max:100',
            'message' => 'required',
        ]);

        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back();
    }

    public function show()
    {
        //
        $contacts = contact::all();
        return view('admin.message', compact('contacts'));
    }

    public function destroy($id)
    {
        //
        contact::find($id)->delete();

        return redirect()->back();
    }
}
