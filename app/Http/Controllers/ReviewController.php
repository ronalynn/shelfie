<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reviews = Review::all();
      return view('reviews.index', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'book_id' => 'required|integer',
        'user_id' => 'required|integer',
        'review_title' => 'required|max:255',
        'rating' => 'required|integer',
        'review' => 'required|max:255',
      ]);

      $r = new Review;
      $r->book_id = $validatedData['book_id']; //Gone Girl
      $r->user_id = $validatedData['user_id']; // Oprah
      $r->review_title = $validatedData['review_title'];
      $r->rating = $validatedData['rating'];
      $r->review = $validatedData['review'];
      $r->save();

      session()->flash('message', 'new review added');
      return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = Review::findOrFail($id);
      return view('reviews.show', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
