<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
            [
            	[
    	            'key' => 'opensource',
    	            'name' => 'Open Source',
    	            'description' => 'Codigo fuente disponible para ser copiado, estudiado, modificado',
    	            'css_class' => 'label-opensource',
                    'order' => 700
            	],
                [
                    'key' => 'responsive',
                    'name' => 'Responsive',
                    'description' => 'Diseño ajustable a todo tipo de dispositivo',
                    'css_class' => 'label-responsive',
                    'order' => 400
                ],
                [
                    'key' => 'auto',
                    'name' => 'Autogestionables',
                    'description' => 'Autogestión de contenido mediante un panel de administración',
                    'css_class' => 'label-auto',
                    'order' => 800
                ],
                [
                    'key' => 'game',
                    'name' => 'Juegos',
                    'description' => 'Experimentación con juegos',
                    'css_class' => 'label-game',
                    'order' => 500
                ],
                [
                    'key' => 'research',
                    'name' => 'Investigación',
                    'description' => 'Investigación con distintas tecnologías',
                    'css_class' => 'label-research',
                    'order' => 600
                ],
                [
                    'key' => 'abml',
                    'name' => 'Sistemas de gestión',
                    'description' => 'Desarrollo de sistema de gestión a medida',
                    'css_class' => 'label-intr',
                    'order' => 900,
                ],
                [
                    'key' => 'highlighted',
                    'name' => 'Destacados',
                    'description' => 'Proyecto destacado',
                    'css_class' => 'label-highlighted',
                    'order' => 1000
                ],
                [
                    'key' => 'library',
                    'name' => 'Librería',
                    'description' => 'Libreria',
                    'css_class' => 'label-library',
                    'order' => 710
                ],

            ]
        );
    }
}
