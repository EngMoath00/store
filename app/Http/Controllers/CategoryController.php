<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('admin.category.addCategory', compact('contacts'));
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
        $validated = $request->validate([
            'category_name' => [
                'required'
            ]
        ]);

        $category = new category();
        $category->name = $request->category_name;
        $category->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $categories = category::all();
        $contacts = contact::all();
        return view('admin.category.allCategory', compact('categories', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category =  category::where('id', $id)->first();
        $contacts = contact::all();

        return view('admin.category.editCategory', compact('category', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'category_name' => 'required',
        ]);

        category::where('id', $request->id)
            ->update([
                'name' => $request->category_name,
            ]);

        return redirect()->route('show.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        category::find($id)->delete();
        return redirect()->back();
    }
}
