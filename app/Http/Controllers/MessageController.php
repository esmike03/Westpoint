<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Message::create($request->all());

        return response()->json(['success' => 'Message sent successfully!']);
    }

    public function displayMessages() {
        $messages = Message::latest()->paginate(10); // Paginate results
        return view('messages', compact('messages'));
    }
}
