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
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Podcast::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->text(),
        'file_mp3' => 'https://s3-us-west-2.amazonaws.com/cdn.nawe.by/sounds/Bach_Sinfonien15.mp3',
        'file_ogg' => 'https://s3-us-west-2.amazonaws.com/cdn.nawe.by/sounds/Bach_Sinfonien15.ogg'
    ];
});