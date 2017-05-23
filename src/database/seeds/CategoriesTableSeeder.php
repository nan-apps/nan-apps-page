<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
            	[
    	            'key' => 'admin_systems',
    	            'name' => 'Sistemas de Gestión',
    	            'info' => null,
    	            'order' => 1,
            	],
            	[
    	            'key' => 'sites',
    	            'name' => 'Sitios',
    	            'info' => null,
    	            'order' => 2,
            	],
            	[
    	            'key' => 'research',
    	            'name' => 'Investigación',
    	            'info' => '<a href="https://github.com/nan-apps/" target="_blank">https://github.com/nan-apps/</a>',
    	            'order' => 2,
            	]
            ]
        );
    }
}
