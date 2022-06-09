<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Department;
use App\Models\Stuff;
use App\User;
use Faker\Generator as Faker;

$factory->define(Stuff::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'post' =>$faker->name,
        'department' => Department::all()->random()->name,
        'created_by_id' => User::all()->random()->id,

    ];
});
