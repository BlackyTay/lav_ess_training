<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    $roomType = DB::table('room_types')->pluck('id')->all();

    return [
        'number' => $faker->unique()->randomNumber(),
        'romm_type_id' => $faker->randomElement($roomTypes),
    ];
});
