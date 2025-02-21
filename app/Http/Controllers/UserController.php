<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updatePhone(Request $request)
    {
        $request->validate([
            'phone' => 'unique:users,phone|required|string|max:15'
        ]);

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->save();

        return response()->json(['success' => true, 'phone' => $user->phone]);
    }

    public function updateAddress(Request $request)
{
    $validated = $request->validate([
        'street' => 'required|string',
        'house_number' => 'required|string',
        'barangay' => 'required|string',
        'city' => 'required|string',
        'province' => 'required|string',
        'postal_code' => 'required|string',
        'country' => 'required|string',
    ]);

    // Save to database (assuming user has an Address model)
    $address = Auth::user()->address()->updateOrCreate(['user_id' => Auth::id()], $validated);

    return response()->json([
        'success' => true,
        'address' => $address
    ]);
}

}
