<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
        // return view('admin.products.allproducts');
        $products =  product::all();
        $categories = Category::all();

        return view('front.product', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $contacts = contact::all();
        return view('admin.products.add_product', compact('categories', 'contacts'));
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
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_qty' => 'required|numeric',
            'product_details' => 'required|max:100',
            'category_id' => 'required',
            'product_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $product = new product();
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->quantity = $request->product_qty;
        $product->details = $request->product_details;
        $product->category_id = $request->category_id;

        if ($request->product_image) {

            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
        $products = product::all();
        $contacts = contact::all();
        return view('admin.products.allproducts', compact('products', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $product =  product::where('id', $request->id)->first();
        $categories = Category::all();
        $contacts = contact::all();

        return view('admin.products.editproduct', compact('product', 'categories', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'details' => 'required|max:100',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $new_name = time() . '.' . $ext;
            $request->file('image')->move(public_path('images'), $new_name);
        } else {
            $new_name = $product->image;
        }

        Product::find($request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'details' => $request->details,
            'image' => $new_name,
            'category_id' => $request->category_id
        ]);




        return redirect()->route('show.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = product::find($id)->delete();

        return redirect()->back();
    }
}
