<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'book_id'=>App\Book::pluck('id')->random(),
        'user_id'=>App\User::pluck('id')->random(),
        'review_title'=>$faker->catchPhrase,
        'rating'=>$faker->numberBetween(0,5),
        'review'=>$faker->realText($faker->numberBetween(10,500))
    ];
});
