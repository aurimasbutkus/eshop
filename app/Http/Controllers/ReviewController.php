<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

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
        $stat =  DB::select("SELECT * from reviews");

        return view('reviews.showStatistics')->with('reviews', $stat);
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



    public function showReview($id){
        $sproduct = DB::select("SELECT * FROM products WHERE id = '$id'");
        $name = $sproduct[0]->title;
        $sql =  DB::select("SELECT * from reviews where 'product_name' = '$name'");


        return redirect('allReviews')->with('product',$sproduct)->with('reviews',$sql);
    }
    public function review(Request $request){
        Review::create([
            'title' => 'Product Review',
            'status' => 'active',
            'body' => $request->text,
            'rating' => $request->rating,
            'product_id' => $request->product_id,
            'user_id' => isset(Auth::user()->id) ? Auth::user()->id : null,
        ]);
        return redirect()->back();
    }

    public function showComment($id){
        $sproduct = DB::select("SELECT * FROM reviews WHERE id = '$id'");
        $name = $sproduct[0]->id;
        $sql =  DB::select("SELECT * from comments where 'review_id' = '$id'");

        return redirect('allReviews')->with('comments',$sql)->compact('id',$name);
    }
    public function comment(Request $request){
        $ss = DB::table('comments')->insert(['body' => $request->text, 'vote' => $request->vote, 'review_id' => $request->rating_id]);
        return redirect()->back();
    }

    public function deleteReview($id)
    {
        DB::table('reviews')->delete(['id' => $id]);
        return redirect('allReviews');
    }

    public function editRedirectReview($id)
    {
        $review = DB::select("SELECT * FROM reviews WHERE id = '$id'");

        return redirect('editReview')->with('review', $review);
    }


    public function updateR($id)
    {
         DB::insert("Insert * FROM reviews WHERE id = '$id'");
        return redirect()->back();
    }
}
