<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'age' => $faker->numberBetween($min = 25, $max = 35),
        'gender' => $faker->numberBetween($min = 1, $max = 2),
        'score' => $faker->numberBetween($min = 0, $max = 100),
        'time'  => $faker->numberBetween($min = 0, $max = 180),
        'status' => $faker->numberBetween($min = 0, $max = 2),
        'token' => $faker->randomNumber(),
        'token_used_flag' => $faker->numberBetween($min = 0, $max = 1),
        'test_datetime' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
