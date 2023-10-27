<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = \App\Models\Movie::all();
        $message = 'Movies!';
        return view('welcome', compact('message', 'movies'));
    }
}
