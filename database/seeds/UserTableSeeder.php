<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            // [
            // 'name' => 'Mostafizr Rahman',
            // 'email' => 'mostafizur@gmail.com',
            // 'password' => '123-5'
            // ],
            [
            'name' => 'Dipayan Biswas',
            'email' => 'dipayan@gmail.com',
            'password' => '23456'
            ],
            [
            'name' => 'Rezwanul Islam',
            'email' => 'rezwanul@gmail.com',
            'password' => '34567'
            ],
            [
            'name' => 'Habibur Rahman',
            'email' => 'habibur@gmail.com',
            'password' => '45678'
            ],
            [
            'name' => 'Souvik Kar',
            'email' => 'souvik@gmail.com',
            'password' => 'abcde'
            ],
            [
            'name' => 'Koushik Roy',
            'email' => 'koushik@gmail.com',
            'password' => '56789'
            ],
            [
            'name' => 'Minhazul Arnab',
            'email' => 'minhazul@gmail.com',
            'password' => 'bcdef'
            ],
            [
            'name' => 'Toufikur Rahman',
            'email' => 'toufikur@gmail.com',
            'password' => 'abc12'
            ],
            [
            'name' => 'Reazul Rahi',
            'email' => 'reazul@gmail.com',
            'password' => '23456'
            ],
            [
            'name' => 'Kamrun Nisha',
            'email' => 'kamrunnisha@gmail.com',
            'password' => '*12ab#'
            ],
            ];

            foreach($usersData as $users)
            factory(User::class)->create([
            'name' => $users['name'],
            'email' => $users['email'],
            'password' => $users['password']

            ]);
            }
    }

