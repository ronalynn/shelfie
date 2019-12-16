<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'about_me' => $faker->realText($faker->numberBetween(10,150)),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'city' => $faker->city,
        'country' => $faker->country,
        'age' => $faker->numberBetween(1,100),
        'user_id' =>App\User::pluck('id')->random()
      ];
});
