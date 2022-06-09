<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Department;
use App\Models\Teacher;
use App\User;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' =>$faker->unique()->safeEmail,
        'phone'=> $faker->phoneNumber(10),
        'department_id' => Department::all()->random()->id,
        'created_by_id' => User::all()->random()->id,

    ];
});
