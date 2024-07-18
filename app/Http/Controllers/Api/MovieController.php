<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;



class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('directors', 'actrors', 'genres', 'ratings')->get();
        return response()->json($movies);
    }

    public function show(Movie $movie) 
    { 
        return $movie->load('directors', 'actrors', 'genres', 'ratings'); 
    }

    public function movie_genre(Genre $movie)
    {
        
    }
}
