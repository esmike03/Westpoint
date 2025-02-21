<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showProfile(){

        if (!auth()->check()) {
            return redirect('/login')->with('message', 'Please Login to view carts!');
        }
        return view('userprofile');
    }
}
