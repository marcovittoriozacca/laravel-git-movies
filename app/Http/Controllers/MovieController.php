<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validation = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'producer' => 'required|max:50',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|between:1,5',
            'duration' => 'required|numeric',
        ]);

        $newMovie = new Movie();
        $newMovie->fill($validation);
        $newMovie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validation = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'producer' => 'required|max:50',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|between:1,5',
            'duration' => 'required|numeric',
        ]);


        $movie->update($validation);

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {

        $movie->delete();

        return redirect()->route('movies.index');
    }
}
