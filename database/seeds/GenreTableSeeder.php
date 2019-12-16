<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $g = new Genre;
      $g->genre = "Thriller";
      $g->save();
      $g->books()->attach(1); //Gone Girl
      $g->books()->attach(3); // Random
    }
}
