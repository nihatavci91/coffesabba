<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->basket()->count() === 0) {
            return response()->json([
                'items' => null
            ]);
        }

        return response()->json([
            'items' => $user->basket
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'items' => ['array', 'required']
        ]);

        $basket = Basket::updateOrCreate(
            ['user_id' => 1],
            ['items' => $validated['items']]
        );

        return response()->json([
            'items' => $basket->items
        ]);
    }
}
