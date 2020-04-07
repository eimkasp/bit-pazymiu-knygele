<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use App\Lecture;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'student_id' => Student::all()->random()->id,
		'lecture_id' => Lecture::all()->random()->id,
		'grade' => rand(1, 10)
     ];
});
