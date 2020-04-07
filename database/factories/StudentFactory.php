<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'surname' => $faker->lastName,
		'email' => $faker->unique()->safeEmail,
		'photo' => $faker->imageUrl(500, 300, 'cats'),
		'phone' => $faker->e164PhoneNumber
	];
});
