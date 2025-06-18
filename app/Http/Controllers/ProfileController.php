<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function myStoryList()
    {
        $user = Auth::user();
        $stories = Story::select('id', 'cover_image')->where('author_id', $user->id)->latest()->get();

        return view('profile.my-story-list', ['user' => $user, 'stories' => $stories]);
    }
}
