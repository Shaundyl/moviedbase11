<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings= Rating::with('directors', 'actrors', 'genres', 'ratings')->get();
        return response()->json($ratings);
    }

    public function show(Rating $rating) 
    { 
        return $rating->load('directors', 'actrors', 'genres', 'ratings'); 
    }
}
