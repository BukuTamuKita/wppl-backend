<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        // 'password' =>  Hash::make('password'), // password
        'password' =>  $faker->password(6,8), // password
        'role' => $faker->randomElement(['admin', 'host']),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
