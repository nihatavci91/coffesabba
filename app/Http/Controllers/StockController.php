<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $productId = $request->get('productId');

        if (empty($productId)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid product_id',
            ]);
        }

        $stocks = Stock::where('product_id', $productId)->get();

        return response()->json([
            'status' => 'success',
            'stocks' => $stocks
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric',
            'weight' => 'required|numeric',
            'price' => "required|numeric|min:0"
        ]);

        $query = ['product_id' => $validated['product_id'], 'weight' => $validated['weight']];

        $stock = Stock::where($query)->first();

        if (!empty($stock)) {
            return redirect()->back()->with('errorMessage', 'Ürün ve Gramaja göre stok kaydı mevcut. Lütfen mevcut kaydı güncelleyin. ');
        }

        Stock::create($validated);

        return redirect()->back()->with('successMessage', 'Stok kaydı başarı ile oluşturuldu.');
    }

    public function update(Stock $stock, Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric',
            'weight' => 'required|numeric',
            'price' => "required|numeric|min:0"
        ]);

        $stock->update($validated);

        return redirect()->back()->with('successMessage', 'Stok kaydı başarı ile güncellendi.');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->back()->with('successMessage', 'Stok kaydı başarı ile silindi.');
    }
}
