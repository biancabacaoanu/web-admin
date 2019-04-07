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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Exposition;
use App\Models\Staff;
use Faker\Generator;
use Faker\Provider\Internet;

$factory->define(App\Models\Staff::class, function (Faker\Generator $faker) {
    static $password;
    Internet::$freeEmailDomain = array('museum.lc');

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->freeEmail,
        'password' => $password ?: $password = bcrypt('parola'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Exposition::class, function (Faker\Generator $faker) {
    static $password;
    Internet::$freeEmailDomain = array('museum.lc');

    return [

            'title' => 'Carti Mihai Eminescu',
            'description' => 'Cea mai veche carte',
            'museum_id' => 1,
            'staff_id' => 1,
    ];
});


$factory->define(App\Models\Museum::class, function (Faker\Generator $faker) {
    static $password;
    Internet::$freeEmailDomain = array('museum.lc');

    return [

        'museum_id' => 1,
        'name' => 'Mihai Eminescu Museum',
        'museum_id' => 1,
        'address' => 'Copou Iasi',
        'opening_hour' => '08:00:00',
        'closing_hour' => '21:00:00',
    ];
});
