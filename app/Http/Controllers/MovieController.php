<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        // $movie                      = new Movie();
        // $movie->title               = "Film 2";
        // $movie->original_title      = "Film two";
        // $movie->nationality         = "japanese";
        // $movie->date                = "2022-01-14";
        // $movie->vote                = 8.5;
        // $movie->save();

        $movies = Movie::all();
        return view('home', [
            'movies'    => $movies
        ]);
    }
}
