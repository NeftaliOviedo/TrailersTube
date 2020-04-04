<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    protected function validateMovie()
    {
        return request()->validate([
            'title' => 'required',
            'image' => ['required', 'max:255'],
            'synopsis' => 'required',
            'trailer' => ['required', 'max:255'],
            'releaseDate' => 'required'

        ]);
    }

    public function showAll()
    {

        $movies = Movies::all();

        return view('layouts.movies', compact('movies'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('layouts.admin');
    }
    public function store()
    {
        $this->validateMovie();
        $movie = new Movies();

        $movie->title = request('title');
        $movie->image = request('image');
        $movie->synopsis = request('synopsis');
        $movie->trailer = request('trailer');
        $movie->releaseDate = request('releaseDate');
        $movie->save();

        return redirect('/movies');
    }

    public function edit($movieid)
    {
        $movie = Movies::findOrFail($movieid);
        return view('layouts.edit', compact('movie'));
    }

    public function update($movieid)
    {
        $this->validateMovie();

        $movie = Movies::findOrFail($movieid);

        $movie->title = request('title');
        $movie->image = request('image');
        $movie->synopsis = request('synopsis');
        $movie->trailer = request('trailer');
        $movie->releaseDate = request('releaseDate');
        $movie->save();

        return redirect('/movies');
    }

    public function delete(Movies $movie)
    {
        $movie->delete();
        return redirect('/movies');
    }
}
