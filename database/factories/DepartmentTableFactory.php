<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Department;
use App\User;
use Brick\Math\BigInteger;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'faculty' =>$faker->name,
        'university'=> $faker->name,
        'department_code' => $faker->name,
        'created_by_id' => User::all()->random()->id,

    ];
});
