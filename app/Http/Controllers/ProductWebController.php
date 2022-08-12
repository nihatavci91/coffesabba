<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductWebController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function detail(Request $request)
    {
        $product = Product::where('id',$request->id)->with('images')->with('stocks')->with('category')->first();

        return view('product.index',['product' => $product]);
    }
}
