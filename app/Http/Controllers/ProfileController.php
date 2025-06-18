<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function myStories()
    {
        $user = Auth::user();
        $stories = Story::select('id', 'cover_image')->where('author_id', $user->id)->latest()->get();

        return view('profile.my-stories.index', ['user' => $user, 'stories' => $stories]);
    }

    public function editStory(string $id)
    {
        $story = Story::where('id', $id)->first();
        $genres = Genre::all();

        return view('profile.my-stories.edit', ['story' => $story, 'genres' => $genres]);
    }

    public function updateStory(Request $request, Story $story)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'genre_id' => 'required|integer|exists:genres,id',
            'cover_image' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('cover_image')) {
            // Delete old image if exists
            if ($story->cover_image && Storage::disk('public')->exists($story->cover_image)) {
                Storage::disk('public')->delete($story->cover_image);
            }

            // Store new image
            $imagePath = $request->file('cover_image')->store('stories', 'public');
            $validated['cover_image'] = $imagePath;
        } else {
            // If no new image uploaded, keep the old one
            $validated['cover_image'] = $story->cover_image;
        }

        $story->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'genre_id' => $validated['genre_id'],
            'cover_image' => $validated['cover_image'],
            'author_id' => Auth::id()
        ]);

        return redirect()->route('profile.my-stories.index')->with('success', 'Story updated successfully.');
    }
}
