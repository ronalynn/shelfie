<?php

use App\Review;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Review;
        $r->book_id = 1; //Gone Girl
        $r->user_id = 1; // Oprah
        $r->review_title = "Great fun, albiet a slow burn.";
        $r->rating = 5;
        $r->review = "I loved this book, and honestly, I couldn’t predict what
        was going to happen because the plot was completely twisted. I went in
        completely blind and that’s what I would recommend to everyone else.
        You will more than likely be shocked. It’s one of the best psychological
        thrillers I’ve read, slow at times, but the story picks up and then
        you’re in for the ride.";
        $r->save();

        factory(App\Review::class, 20)->create();
    }
}
