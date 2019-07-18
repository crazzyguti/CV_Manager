<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'fname' => $faker->firstName(),
        'lname' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->e164PhoneNumber,
        'bdate' => $faker->date(),
        'gender' => $gender,
        'register_ip' => $faker->ipv4,
        'password' => Hash::make('11223344'),
        'remember_token' => Str::random(10),
        'active_token' => Str::random(10),
        'email_verified_at' => now(),
    ];
});
