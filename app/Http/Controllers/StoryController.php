<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::select('id', 'cover_image')->whereNull('deleted_at')->latest()->get();

        return view('stories.index', ['stories' => $stories]);
    }

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

            Story::create([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'genre_id' => $validated['genre_id'],
                'cover_image' => $validated['cover_image'],
                'author_id' => Auth::id()
            ]);

            return redirect()->route('stories.index')->with('success', 'Story submitted successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('stories.create')->with('error', 'Failed to submit the story. Please try again.');
        }
    }

    public function show(Story $story)
    {
        return view('stories.show', ['story' => $story]);
    }
}
