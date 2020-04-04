<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function showAll()
    {

        $movies = Movies::all();

        return view('home', compact('movies'));
    }


    public function show($movieid)
    {
        $movie = Movies::findOrFail($movieid);
        return view('layouts.trailer', compact('movie'));
    }

}
