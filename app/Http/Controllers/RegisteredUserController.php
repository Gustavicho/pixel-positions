<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a acount and employer.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a new acount and employer in the db.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', File::image()->max('10mb')],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $logoPath = $request->logo->store('logos', 'public');

        $user->employer()->create([
            'name' => $request->employer,
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
