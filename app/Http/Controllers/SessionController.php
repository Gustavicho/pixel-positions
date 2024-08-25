<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    /**
     * Show the form for login in a acount.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * xhexk the db and login in a acount.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
        }

        $request->session()->regenerate();

        return redirect()->route('home');
    }

    /**
     * Log out the current user.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
