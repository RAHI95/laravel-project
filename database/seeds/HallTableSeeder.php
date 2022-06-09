<?php

use App\Models\Hall;
use Illuminate\Database\Seeder;

class HallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $halls = [
            [
            'name' => 'BSMRH',
            'provost_name' => 'prof.pintu',
            ],
            [
                'name' => 'AMAR',
                'provost_name' => 'prof.zaman',
                ],
        ];
        foreach($halls as $hall)
        factory(Hall::class)->create([
            'name' => $hall['name'],
            'provost_name' => $hall['provost_name'],
            ]);
    }
}
