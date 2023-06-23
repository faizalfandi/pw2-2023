<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $movies = Movie::all();

       return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies/create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vaildateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
            //upload gambar
        if($request->hasFile('poster')) {
            $extention = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $vaildateData['poster'] = $imageName;
        }

        Movie::create($vaildateData);

        return redirect('/movies')->with('success', 'Movie added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $vaildateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
        
        if($request->hasFile('poster')){
            //delete gambar
            Storage::disk('public')->delete('/assets/img/' . $movie->poster);
            //upload gambar
            $extention = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $vaildateData['poster'] = $imageName;
        }
        $movie->update($vaildateData);

        return redirect('/movies')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie deleted successfully');
    }
}
       