<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        return view('reviews/index', compact('reviews'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        return view('reviews/create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vaildateData = $request->validate([
            'film_id' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required',
        ]);

        Review::create($vaildateData);

        return redirect('/reviews')->with('success', 'Review added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $movies = Movie::all();
        return view('reviews.edit', compact('movies','review'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $vaildateData = $request->validate([
            'film_id' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required',
        ]);

        $review->update($vaildateData);

        return redirect('/reviews')->with('success', 'Review added succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect('/reviews')->with('success', 'Review deleted successfully');
    }
}
