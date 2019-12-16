<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = new Book;
        $b->title = "Gone Girl";
        $b->author = "Gillian Flynn";
        $b->pages = 432;
        $b->isbn = "9780307588364";
        $b->publisher = "Crown Publishing Group";
        $b->save();

        $books = factory(App\Book::class, 10)->create();
        $genres = factory(App\Genre::class, 10)->create();
        // attaches 1 to 5 of the 10 genres for each book created.
        $books->each(function(App\Book $b) use ($genres){
          $b->genres()->attach(
            $genres->random(rand(1,3))->pluck('id')->toArray());
        });
    }
}
