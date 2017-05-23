<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
        	[
                [
    	            'key' => 'project_1',
    	            'name' => 'Proyecto 1',
    	            'category_id' => '1'
            	]        	
            ]   
        );
    }
}
