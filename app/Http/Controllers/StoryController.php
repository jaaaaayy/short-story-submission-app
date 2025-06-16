<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Story;
use Illuminate\Http\Request;
use Throwable;

class StoryController extends Controller
{
    public function index() {}

    public function create()
    {
        $genres = Genre::all();
        return view('stories.create', ['genres' => $genres]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'genre_id' => 'required|integer|exists:genres,id',
            'cover_image' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        try {
            $imagePath = $request->file('cover_image')->store('stories', 'public');
            $validated['cover_image'] = $imagePath;

            Story::create($validated);

            return redirect()->route('stories.index')->with('success', 'Story submitted successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('stories.create')->with('error', 'Failed to submit the story. Please try again.');
        }
    }
}
