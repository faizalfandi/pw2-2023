<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
{
    $review = new Review();
    $reviews = $review->getAllReviews();

    return view('reviews/index', ['reviews' => $reviews]);
}

    /* Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /* Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /* Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /* Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}