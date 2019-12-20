<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('reviews.create');
    }

    public function store(){

        $data=request()->validate([
            'review'=>'required|max:2000',
            'image'=>'required|image',
        ]);

        $imagePath = request('image')->store('uploads','public');
        
        auth()->user()->reviews()->create([
            'review' => $data['review'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Review $review){
        return view('reviews.show', ['review'=>$review]);
    }
}
