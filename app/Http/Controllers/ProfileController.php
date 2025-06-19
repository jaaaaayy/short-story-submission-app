<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => 'nullable|string|min:3|max:8|unique:users',
            'email' => 'nullable|email|unique:users',
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        try {
            $user->update($validated);

            return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('profile.index')->with('error', 'Failed to update profile. Please try again.');
        }
    }
}
