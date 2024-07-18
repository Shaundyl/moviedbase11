<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Reviewer;

class ReviewerController extends Controller
{
    public function index()
    {
        $reviews = Reviewer::with('directors', 'actrors', 'genres', 'ratings')->get();
        return response()->json($reviews);
    }

    public function show(Reviewer $reviewer) 
    { 
        return $reviewer->load('directors', 'actrors', 'genres', 'ratings'); 
    }
}
