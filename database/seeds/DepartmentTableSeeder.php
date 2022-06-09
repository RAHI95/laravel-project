<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
            'name' => 'ECE',
            'faculty' => 'EEE',
            'university' => 'KUET',
            'department_code' => '9'
            ],
            [
                'name' => 'CSE',
                'faculty' => 'EEE',
                'university' => 'KUET',
                'department_code' => '7'
                ],
        ];
        foreach($departments as $department)
        factory(Department::class)->create([
            'name' => $department['name'],
            'faculty' => $department['faculty'],
            'university' => $department['university'],
            'department_code' => $department['department_code']

            ]);
    }
}
