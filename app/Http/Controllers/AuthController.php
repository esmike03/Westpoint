<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function admin()
    {
        if (!auth()->guard('admin')->check()) {
            // Redirect to the login page if not authenticated
            return redirect('/admin/login')->with('message', 'Please log in to access this page.');
        }
        return view('admin');
    }

    public function showLogin()
    {

        return view('login');
    }

    public function adminauth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return view('admin'); // Redirect to admin dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
