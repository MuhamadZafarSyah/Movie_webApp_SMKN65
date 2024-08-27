<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $movies_banner = Movie::get();

        $search = $request->input('search');

        if ($search) {
            $movies = Movie::where('judul', 'like', '%' . $search . '%')->get();
        } else {
            $movies = Movie::get();
        }

        return view('home', compact('movies', 'movies_banner'));
    }

    public function show(Movie $movie)
    {
        $movies = Movie::where('genre', $movie->genre)->where('id', '!=', $movie->id)->get();
        // dd($movies);
        return view('details-movie', compact('movie', 'movies'));
    }
}
