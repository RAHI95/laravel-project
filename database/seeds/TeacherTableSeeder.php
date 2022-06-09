<?php

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
            'subject' => 'physics',
            ],
            [
            'subject' => 'chemistry',
            ],
            [
            'subject' => 'mathematics-4',
            ],
            ];

            foreach($teachers as $teacher)
            factory(Teacher::class,10)->create([
            'subject' => $teacher['subject']
            ]);
    }
}
