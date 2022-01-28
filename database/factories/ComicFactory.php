<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title' => $faker -> word(),
        'author' => $faker -> word(),
        'release_date' => $faker -> date(),
        'pages'=> $faker -> numberBetween(0, 15)
    ];
});
