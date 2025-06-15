<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:3|max:8',
            'password' => 'required|string|min:8',
            'remember' => 'boolean',
        ]);

        $user = User::where('username', $validated['username'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()->with('error', 'Incorrect username or password.');
        }

        Auth::login($user, $validated['remember'] ?? false);

        return redirect()->route('stories.index')->with('success', 'Logged in successfully.');
    }

    public function create()
    {
        return view('auth.register.index');
    }
}
