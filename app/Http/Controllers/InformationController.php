<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contacts = contact::all();
        return view('admin.information.addinformation', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'mobile' => 'required|numeric',
            'email' => 'required|unique:information,email',
            'about_us' => 'required',
            'location' => 'required|max:100',
            'facebook' => 'required',
            'instagram' => 'required',
        ]);

        $information = new information();
        $information->phone = $request->mobile;
        $information->email = $request->email;
        $information->about_us = $request->about_us;
        $information->location = $request->location;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;

        $information->save();

        return redirect()->route('show.Informa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        //
        $contacts = contact::all();
        $informations = information::all();
        return view('admin.information.all_Information', compact('informations', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $information =  information::where('id', $id)->first();
        $contacts = contact::all();

        return view('admin.information.editinformation', compact('information', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information $information)
    {
        //
        $request->validate([
            'mobile' => 'required|numeric',
            'email' => 'required',
            'about_us' => 'required',
            'location' => 'required|max:100',
            'facebook' => 'required',
            'instagram' => 'required',
        ]);

        information::find($request->id)->update([
            'phone' => $request->mobile,
            'email' => $request->email,
            'about_us' => $request->about_us,
            'location' => $request->location,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('show.Informa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        information::find($id)->delete();

        return redirect()->back();
    }
}
