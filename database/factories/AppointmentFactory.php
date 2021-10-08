<?php

namespace database\factories;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Appointment;
use App\Models\Host;
use App\Models\Guest;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    $host_ids = Host::all()->pluck('id')->toArray();
    $guest_ids = Guest::all()->pluck('id')->toArray();
    return [
        'host_id' => $faker->randomElement($host_ids),
        'guest_id' => $faker->randomElement($guest_ids),
        // 'hosts_id'=> factory(Host::class),
        // 'guests_id'=> factory(Guest::class),
        'purpose'=> $faker->sentence(6),
        'status'=>$faker->randomElement(['waiting','accepted','declined']),
        'notes'=> $faker->sentence(6),
        'date'=>$faker->date('Y-m-d','now'),
        'time'=>$faker->time('H:i','now'),
        //
    ];
});
