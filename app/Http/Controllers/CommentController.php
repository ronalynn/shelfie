<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comments = Comment::all();
      return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $reviews = Review::orderBy('review_title','asc')->get();
      return view('comments.create', ['reviews' => $reviews]);
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
        'user_id' => 'required|integer',
        'review_id' => 'required|integer',
        'comment' => 'required|max:255',
      ]);

      $c = new Comment;
      $c->user_id = $validatedData['user_id'];
      $c->review_id = $validatedData['review_id'];
      $c->comment = $validatedData['comment'];
      $c->save();

      session()->flash('message', 'comment added');
      return redirect()->route('comments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comment = Comment::findOrFail($id);
      return view('comments.show', ['comment' => $comment]);
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
      $comment = Comment::findOrFail($id);
      $comment->delete();
      return redirect()->route('comments.index')->with('message','Comment was deleted');
    }
}
