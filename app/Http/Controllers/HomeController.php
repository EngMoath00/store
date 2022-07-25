<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\category;
use App\Models\information;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = product::all();
        $informations = information::get()->first();
        return view('front.index', compact('categories', 'products', 'informations'));
    }
}
