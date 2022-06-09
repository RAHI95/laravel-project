<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Department;
use App\Models\Hall;
use App\User;
use Faker\Generator as Faker;

$factory->define(Hall::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'provost_name' =>$faker->unique()->name,
        'provost_department' => Department::all()->random()->id,
        'created_by_id' => User::all()->random()->id,

    ];
});
