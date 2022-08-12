<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(Request $request)
    {
        $vouchers = Voucher::paginate(15);

        return view('panel.vouchers.index', [
            'vouchers' => $vouchers
        ]);
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('panel.vouchers.create', [
            'users' => $users,
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'max_uses' => 'nullable|numeric',
            'max_uses_user' => 'nullable|numeric',
            'type' => 'required|in:2,3,4',
            'discount_amount' => 'required|numeric',
            'starts_at' => 'required|date_format:d/m/Y',
            'expires_at' => 'required|date_format:d/m/Y',
            'users' => 'nullable|array',
            'users.*' => 'numeric|exists:users,id',
            'products' => 'nullable|array',
            'products.*' => 'numeric|exists:products,id'
        ]);

        $validated['code'] = generateVoucherCode();
        $validated['starts_at'] = frontDateToDbDate($validated['starts_at']);
        $validated['expires_at'] = frontDateToDbDate($validated['expires_at']);

        $voucher = Voucher::create($validated);

        if (isset($validated['users'])){
            $voucher->users()->attach($validated['users']);
        }

        if (isset($validated['products'])){
            $voucher->products()->attach($validated['products']);
        }

        return redirect()->route('vouchers.edit', [
            'voucher' => $voucher
        ]);
    }

    public function edit(Voucher $voucher)
    {
        $users = User::all();
        $products = Product::all();

        $selectedProducts = $voucher->products()->pluck('id')->toArray();
        $selectedUsers = $voucher->users()->pluck('id')->toArray();

        return view('panel.vouchers.edit', [
            'users' => $users,
            'products' => $products,
            'voucher' => $voucher,
            'selectedProducts' => $selectedProducts,
            'selectedUsers' => $selectedUsers
        ]);
    }

    public function destroy(Voucher $voucher)
    {
        $voucher->delete();

        return redirect()->route('vouchers.index');
    }
}
