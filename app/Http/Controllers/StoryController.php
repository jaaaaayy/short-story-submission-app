<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {}

    public function create()
    {
        $genres = Genre::all();
        return view('stories.create', ['genres'=> $genres]);
    }
}
