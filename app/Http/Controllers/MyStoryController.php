<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Throwable;

class MyStoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $stories = Story::select('id', 'cover_image')->where('author_id', $user->id)->latest()->get();

        return view('mystories.index', ['user' => $user, 'stories' => $stories]);
    }

    public function edit(Story $story)
    {
        $genres = Genre::all();

        return view('mystories.edit', ['story' => $story, 'genres' => $genres]);
    }

    public function update(Request $request, Story $story)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'genre_id' => 'required|integer|exists:genres,id',
            'cover_image' => 'nullable|file|mimes:jpg,jpeg,png'
        ]);

        try {
            if ($request->hasFile('cover_image')) {
                Storage::disk('public')->delete($story->cover_image);

                $imagePath = $request->file('cover_image')->store('stories', 'public');
                $validated['cover_image'] = $imagePath;
            } else {
                $validated['cover_image'] = $story->cover_image;
            }

            $story->update([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'genre_id' => $validated['genre_id'],
                'cover_image' => $validated['cover_image'],
                'author_id' => Auth::id()
            ]);

            return redirect()->route('mystories.index')->with('success', 'Story updated successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('mystories.edit')->with('error', 'Failed to update story. Please try again.');
        }
    }

    public function show(Story $story)
    {
        return view('mystories.show', ['story' => $story]);
    }

    public function destroy(Story $story)
    {
        try {
            $story->delete();

            return redirect()->route('mystories.index')->with('success', 'Story deleted successfully.');
        } catch (Throwable $caught) {
            return redirect()->route('mystories.index')->with('error', 'Failed to delete story. Please try again.');
        }
    }
}
