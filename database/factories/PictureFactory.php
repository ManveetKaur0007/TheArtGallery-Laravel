<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Picture;
use Faker\Generator as Faker;

$factory->define(Picture::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'body' => $faker->sentence,
        'author_id' => $faker->numberBetween(1,30),
        'gallery_id' => $faker->numberBetween(1,3),
    ];
});
