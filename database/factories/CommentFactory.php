<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'user_id' =>$faker->randomElement($users),
        'review_id' => App\Review::pluck('id')->random(),
        'comment' =>$faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
