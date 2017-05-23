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
    	            'key' => 'web',
    	            'name' => 'Web',
    	            'description' => 'Sitio desarrollado a medida',
    	            'css_class' => 'label-web',
            	],
            	[
    	            'key' => 'opensource',
    	            'name' => 'Open Source',
    	            'description' => 'Codigo fuente disponible para ser copiado, estudiado, modificado',
    	            'css_class' => 'label-opensource',
            	],
                [
                    'key' => 'responsive',
                    'name' => 'Responsive',
                    'description' => 'Diseño ajustable a todo tipo de dispositivo',
                    'css_class' => 'label-responsive',
                ],
                [
                    'key' => 'auto',
                    'name' => 'Autogestionable',
                    'description' => 'Autogestión de contenido mediante un panel de administración',
                    'css_class' => 'label-auto',
                ],
                [
                    'key' => 'game',
                    'name' => 'Juego',
                    'description' => 'Experimentación con juegos',
                    'css_class' => 'label-game',
                ],
                [
                    'key' => 'research',
                    'name' => 'Investigación',
                    'description' => 'Investigación con distintas tecnologías',
                    'css_class' => 'label-research',
                ],
                [
                    'key' => 'abml',
                    'name' => 'Sistema de gestión',
                    'description' => 'Desarrollo de sistema de gestión a medida',
                    'css_class' => 'label-intr',
                ],
                [
                    'key' => 'info',
                    'name' => '+Info',
                    'description' => null,
                    'css_class' => 'label-info',
                ],

            ]
        );
    }
}
