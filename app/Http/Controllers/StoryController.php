<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {}

    public function create()
    {
        return view('stories.create');
    }
}
