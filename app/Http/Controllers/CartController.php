<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        // Store in the cart table
        Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id
            ],
            [
                'quantity' => \DB::raw("{$request->quantity}")
            ]
        );

        return response()->json(['message' => 'Added to cart successfully!']);
    }
}
