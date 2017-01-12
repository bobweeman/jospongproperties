<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => "Asamoah Kwaku",
        'email' => "bobweeman@gmail.com",
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Country::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->country


    ];
});

$factory->define(App\District::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->streetName,

    ];
});
$factory->define(App\City::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->city,

    ];
});
$factory->define(App\RegionState::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->state,

    ];
});