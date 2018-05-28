<?php

use Faker\Generator as Faker;
use App\Models\Status;
$factory->define(Status::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'content'    => $faker->text(),
        'title'    => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
