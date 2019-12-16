<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
      'title'=> $faker->realText($maxNbChars = 20),
      'author'=> $faker->name,
      'pages'=> $faker->numberBetween($min = 100, $max = 9999),
      'isbn'=> $faker->unique()->isbn13(),
      'publisher'=> $faker->company()
    ];
});
