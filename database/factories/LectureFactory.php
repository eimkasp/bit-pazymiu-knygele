<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Lecture::class, function (Faker $faker) {
    return [
        //
		'name' =>  $faker->word,
		'description' => $faker->text(150),
    ];
});
