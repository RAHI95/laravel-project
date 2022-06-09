<?php

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = [
            [
            'faculty_id' => '1',
            'faculty_name' => 'CE',
            'dean' => 'prof.sala'
            ],
            [
            'faculty_id' => '5',
            'faculty_name' => 'ME',
            'dean' => 'prof.hasan'
                ],
        ];
        foreach($faculties as $faculty)
        factory(Faculty::class)->create([
            'faculty_id' => $faculty['faculty_id'],
            'faculty_name' => $faculty['faculty_name'],
            'dean' => $faculty['dean'],
            ]);
    }
}
