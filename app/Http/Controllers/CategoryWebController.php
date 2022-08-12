<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryWebController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->id;
        $products = Product::where('category_id',$category_id)->with('images')->with('stocks')->get();
        $count = count($products);
        $category = Category::where('id',$category_id)->first();
        $categories = Category::all();
        return view('category.index',['products' => $products,'category' => $category,'categories' => $categories,'countproduct' => $count]);
    }
}
