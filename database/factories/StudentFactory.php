<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birth_date' => $faker->dateTimeBetween('1990-01-01', '2000-12-31')->format('Y-m-d'),
        'phone' => $faker->phoneNumber,
    ];
});
