<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //  $this->call(UserTableSeeder::class);
        // $this->call(TeacherTableSeeder::class);
        // $this->call(StudentTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        // $this->call(FacultyTableSeeder::class);
        // $this->call(HallTableSeeder::class);
        // $this->call(StuffTableSeeder::class);

    }
}
