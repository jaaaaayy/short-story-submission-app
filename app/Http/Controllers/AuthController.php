<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

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
        ]);

        try {
            $user = User::where('username', $validated['username'])->first();

            if (!$user || !Hash::check($validated['password'], $user->password)) {
                return back()->with('error', 'Incorrect username or password.');
            }

            Auth::login($user, true);

            return redirect()->route('stories.index')->with('success', 'Logged in successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('auth.index')->with('error', 'Failed to login. Please try again.');
        }
    }

    public function create()
    {
        return view('auth.register.create');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:3|max:8|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $userRoleId = Role::where('name', 'user')->value('id');

        try {
            User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role_id' => $userRoleId
            ]);

            return redirect()->route('auth.index')->with('success', 'Registered successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('auth.create')->with('error', 'Failed to register. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout successfully.');
    }
}
