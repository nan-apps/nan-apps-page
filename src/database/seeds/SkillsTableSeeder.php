<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

        	[
                'key' => 'php',
        		'order' => 1000,
                'start_date' => '2011-04-01',
                'name' => 'PHP',
                'level' => 80,
                'info' => ' Actualmente con 
                            <a href="https://codeigniter.com/" title="CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications." target="_blank" >CodeIgniter </a>
                            & 
                            <a href="http://www.doctrine-project.org/" title="Object relational mapper (ORM) for PHP that sits on top of a powerful database abstraction layer" target="_blank" >Doctrine </a>',
            ],
            [
                'key' => 'ror',
            	'order' => 900,
                'start_date' => '2015-05-01',
                'name' => 'Ruby on Rails',
                'level' => 50,
                'info' => null,
            ],
            [
                'key' => 'js',
            	'order' => 800,
                'start_date' => '2009-09-01',
                'name' => 'JavaScript & Jquery',
                'level' => 70,
                'info' => null,
            ],
            [
                'key' => 'html',
            	'order' => 800,
                'start_date' => '2009-09-01',
                'name' => 'HTML & CSS',
                'level' => 70,
                'info' => 'Actualmente con 
                            <a href="http://getbootstrap.com/" title="Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web." target="_blank" >Bootstrap</a>',
            ],
            [
                'key' => 'mysql',
            	'order' => 800,
                'start_date' => '2011-04-01',
                'name' => 'MySQL',
                'level' => 70,
                'info' => null,
            ],

    	]);
    }
}
