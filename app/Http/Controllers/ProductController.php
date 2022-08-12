<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('category_id')){
            $categories = Category::where('id', $request->get('category_id'))->get();
        } else{
            $categories = Category::all();
        }

        $products = Product::with('images')->paginate(15);

        return view('panel.products.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        return view('panel.products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'order' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:active,passive',
            'images' => 'nullable',
            'images.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        $product = Product::create([
            'name' => $validated['name'],
            'category_id' => $validated['category_id'],
            'status' => $validated['status'],
            'order' => $validated['order'],
            'description' => $validated['description']
        ]);

        if (empty($validated['images'])) {
            return redirect()->route('products.edit', [
                'product' => $product
            ]);
        }

        foreach ($validated['images'] as $image) {

            $imageUrl = time() . "-" . $validated['category_id'] . "-" . $product->id . "-" . $image->getClientOriginalName();

            $image->move(public_path('product_images') . "/", $imageUrl);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => $imageUrl
            ]);
        }

        return redirect()->route('products.edit', [
            'product' => $product
        ])->with('successMessage', "Ürün Başarı ile Oluşturuldu");

    }

    public function edit(Product $product, Request $request)
    {
        $categories = Category::all();
        $stocks = Stock::where('product_id', $product->id)->get();

        return view('panel.products.edit', [
            'categories' => $categories,
            'product' => $product,
            'stocks' => $stocks
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'order' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:active,passive',
            'images' => 'nullable',
            'images.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        $product->update([
            'name' => $validated['name'],
            'category_id' => $validated['category_id'],
            'status' => $validated['status'],
            'order' => $validated['order'],
            'description' => $validated['description']
        ]);

        if (empty($validated['images'])) {
            return redirect()->route('products.edit', [
                'product' => $product
            ]);
        }

        ProductImage::where('product_id', $product->id)->delete();

        foreach ($validated['images'] as $image) {
            $imageUrl = time() . "-" . $validated['category_id'] . "-" . $product->id . "-" . $image->getClientOriginalName();

            $image->move(public_path('product_images') . "/", $imageUrl);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => $imageUrl
            ]);
        }

        return redirect()->back()->with('successMessage', "Ürün Başarı ile Güncellendi");
    }

    public function destroy(Product $product, Request $request)
    {
        $product->images()->delete();
        $product->delete();

        return redirect()->back()->with('deleteSuccess', 'Ürün Başarı ile Silindi');
    }
}
