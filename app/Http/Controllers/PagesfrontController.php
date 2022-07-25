<?php

namespace App\Http\Controllers;

use App\Events\topView;
use App\Models\contact;
use App\Models\product;
use App\Models\Category;
use App\Models\pagesfront;
use App\Models\information;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class PagesfrontController extends Controller
{
    public function index()
    {
        //
        $products =  product::all();
        $categories = category::all();
        $informations =  information::get()->first();

        return view('front.index', compact('products', 'categories', 'informations'));
    }


    public function product()
    {
        //
        $products =  product::all();
        $categories = category::all();

        return view('front.shop', compact('products', 'categories'));
    }

    public function cartPage()
    {
        $categories = category::all();
        return view('front.cart', compact('categories'));
    }

    public function says()
    {
        $categories = category::all();
        $messages = contact::all();
        return view('front.testimonial', compact('messages', 'categories'));
    }

    public function singleProduct($id)
    {
        $products =  product::find($id);
        $categories = category::all();
        return view('front.single-product', compact('products', 'categories'));
    }

    public function about()
    {
        $categories = category::all();
        $informations =  information::get()->first();
        return view('front.about', compact('informations', 'categories'));
    }
}
