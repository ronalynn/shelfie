<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $c = new Comment;
      $c->user_id = 1; //Oprah
      $c->review_id = 1; // 1 (Gone Girl)
      $c->comment = "great review!";
      $c->save();

      factory(App\Comment::class, 30)->create();
    }
}
