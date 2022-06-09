<?php

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
            'name' => 'reazul hasan',
            'email' => 'rahi@gmail.com',
            'phone' => '1235653578'
            ],
            [
                'name' => 'souvek kar',
                'email' => 'souvik@gmail.com',
                'phone' => '45678098754'
                ],
        ];
        foreach($students as $student)
        factory(Student::class)->create([
            'name' => $student['name'],
            'email' => $student['email'],
            'phone' => $student['phone']

            ]);
    }
}
