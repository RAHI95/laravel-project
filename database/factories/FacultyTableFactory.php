<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Faculty;
use Faker\Generator as Faker;

$factory->define(Faculty::class, function (Faker $faker) {
    return [
        'faculty_id' =>$faker->name,
        'faculty_name'=> $faker->name,
        'dean' => $faker->name,
    ];
});
