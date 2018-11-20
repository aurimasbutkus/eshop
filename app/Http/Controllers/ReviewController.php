<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function allReviews()
    {
        $reviews = \App\Review::all();
        return view('reviews.allReviews')->with('reviews',$reviews);
    }

    public function editReview()
    {

        return view('reviews.editReview');
    }

    public function showStatistics()
    {

        return view('reviews.showStatistics');
    }

    public function store(Request $request)
    {
        $request->validate([
        'body' => 'required|alpha_num',
            'user_id' => 'required|numeric'
            ]);
        $review = new Review;

        $review->name = $request->name;

        $review->save();
    }
}
