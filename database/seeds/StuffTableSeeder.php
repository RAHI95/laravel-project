<?php

use App\Models\Stuff;
use Illuminate\Database\Seeder;

class StuffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stuffs = [
            [
            'post' => 'lab-assistant',
            ],
            [
            'post' => 'cleaner',
            ],
            [
            'post' => 'maid',
            ],
            ];

            foreach($stuffs as $stuff)
            factory(Stuff::class)->create([
            'post' => $stuff['post']
            ]);
    }
}
