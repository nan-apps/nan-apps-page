<?php

use Illuminate\Database\Seeder;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hobbies')->insert(
        	[
                [
                    'name' => 'Alimentación consciente',
s                   'order' => 1000,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Yoga',
                    'order' => 900,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Música',
                    'order' => 800,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Skateboarding y Surf',
                    'order' => 700,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Ilustración, cine y literatura',
                    'order' => 700,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Tecnología',
                    'order' => 700,
                    'icon' => 'star'
                ],
                [
                    'name' => 'Naturaleza y huerta',
                    'order' => 700,
                    'icon' => 'star'
                ],
            ]
       );     
    }
}
