<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('partners')->insert(
        	[
                [
                    'key' => 'wecode',
                    'name' => 'WeCode',
                    'description' => 'Grupo de profesionales informáticos del cual form parte.',
                    'link' => 'http://wecode.io/en/',
                    'order' => 1000,
                    'icon' => 'star'
                ],
                [
                    'key' => 'tinka',
                    'name' => 'Tinka Lawinka',
                    'description' => 'Empresa de desarrollo web con la cual trabajo en varios proyectos.',
                    'link' => 'https://www.tinkalawinka.com/',
                    'order' => 900,
                    'icon' => 'star'
                ],
                [
                    'key' => 'sal',
                    'name' => 'Sal',
                    'description' => 'Estudio de diseño con el cual tengo varios trabajos realizados en equipo.',
                    'link' => 'http://salbranding.com/',
                    'order' => 800,
                    'icon' => 'star'
                ],
                [
                    'key' => 'topo',
                    'name' => 'Topo Web',
                    'description' => 'Programador/Diseñador con el cual trabajo en equipo.',
                    'link' => 'http://topoweb.com.ar/',
                    'order' => 700,
                    'icon' => 'star'
                ],
            ]
       );     
    }
}
