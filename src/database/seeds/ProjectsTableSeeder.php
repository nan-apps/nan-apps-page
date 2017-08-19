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

        $wecode = App\Partner::where('key', 'wecode')->first()->id;
        $tinka = App\Partner::where('key', 'tinka')->first()->id;

        DB::table('projects')->insert(
        	[
                [
    	            'key' => 'kuruf',
    	            'name' => 'Kuruf',
                    'short_desc' => 'Sistema de gestion para la produccion y la administración de una cervecería rio negrina.  ',
                    'long_desc' => 'Sistema de gestion para <a href="http://cerveceriakuruf.com/"  " target="_blank" >cervecería rio negrina</a>.  El sitema permite gestionar tanto el area de produccion como el area de administración de la cervecería. 
                        Desarrollado con Ruby on Rails y MySQL. Maquetado con HTML5, CSS3 y bootstrap responsive.',
                    'link' => null,
                    'github_link' => null,
                    'has_full_img' => true,
                    'img_ext' => 'png',
                    'partner_id' => $wecode                    
            	],
                [
                    'key' => 'fe',
                    'name' => 'Fe',
                    'short_desc' => 'Tienda de tarot, astrología y más.',
                    'long_desc' => 'Tienda de tarot, astrología y más. Se realizo un desarrollo a medida permitiendo autogestionar el contenido del sitio y las reservas para las distintas sesiones y talleres otorgados por Fe. Desarrollado con PHP ( OpenCore Framework ) y MySQL. Maquetado con HTML5, CSS3 y bootstrap responsive.',
                    'link' => 'http://somosfe.com.ar/',
                    'github_link' => null,
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'flowmax',
                    'name' => 'FlowMax',
                    'short_desc' => 'Sistema de gestión a medida para administrar distribudiores y garantías de espirómetros.',
                    'long_desc' => 'Sistema de gestión a medida para administrar distribudiores y garantías de espirómetros. Desarrollado con PHP ( OpenCore Framework ) y MySQL. Maquetado con HTML5, CSS3 y bootstrap responsive.',
                    'link' => 'http://flowmax.com.ar',
                    'github_link' => '',
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],          
                [
                    'key' => 'socol',
                    'name' => 'SoCoL - Sonido Colectivo',
                    'short_desc' => 'Cooperativa de locutores',
                    'long_desc' => 'Cooperativa de locutores.<br/>Diseño a medida por <a target="_blank" href="http://topoweb.com.ar" >Topo Web</a>.<br/>Maquetado con HTML5, CSS3 y bootstrap responsive.',
                    'link' => 'http://www.socol.com.ar',
                    'github_link' => null,
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'opciones',
                    'name' => 'Opciones Argentinas',
                    'short_desc' => 'Sistema de gestión a medida para administrar pagos de clientes.',
                    'long_desc' => 'Sistema de gestión a medida para administrar pagos de clientes.<br/>El sistema tiene integración con API de <a target="_blank" href="http://www.decidir.com.ar/">SPS Decidir</a>. <br/> Desarrollado con PHP ( OpenCore Framework ) y MySQL.<br/>Maquetado con HTML5, CSS3 y bootstrap responsive.',
                    'link' => null,
                    'github_link' => null,
                    'has_full_img' => true,
                    'img_ext' => 'png',
                    'partner_id' => $tinka
                ],
                [
                    'key' => 'roo',
                    'name' => 'ROO S.A.',
                    'short_desc' => 'Sistema de gestion para <a href="http://utillajesroo.com/" target="_blank">empresa española de micromecanizado</a>',
                    'long_desc' => 'Sistema de gestion para <a target="_blank" href="http://utillajesroo.com/" >empresa española de micromecanizado</a>.<br/> Desarrollo con PHP ( OpenCore Framework ) y MySQL.',
                    'link' => null,
                    'github_link' => null,
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],                
                [
                    'key' => 'lemon',
                    'name' => 'Lemon',
                    'short_desc' => 'Estudio de sonido y grabación',
                    'long_desc' => 'Estudio de sonido y grabación',
                    'link' => 'http://lemon.nan-apps.com',
                    'github_link' => null,
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'processing_experiments',
                    'name' => 'Experimentos con processing',
                    'short_desc' => 'Serie de pruebas con Processing. Tecnología para, mediante codigo,  experimentar con artes audiovisuales.',
                    'long_desc' => 'Serie de pruebas con Processing. Tecnología para, mediante codigo,  experimentar con artes audiovisuales. En estos experimentos mas que nada juego con el procesamiento de imagenes en tiempo real. ',
                    'link' => null,
                    'github_link' => 'https://github.com/nan-apps/processing_projects',
                    'has_full_img' => true,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'openfights',
                    'name' => 'OpenFights',
                    'short_desc' => 'Juego de luchas y estrategia uno contra uno. ',
                    'long_desc' => 'Juego de luchas y estrategia uno contra uno. Desarrollado enteramente en JavaScript. Actualemte con NodeJS estoy haciendo la version <a href="https://github.com/nan-apps/NodeOpenFights" target="_blank" >multiplayer</a>.',
                    'link' => 'http://openfights.nan-apps.com/',
                    'github_link' => 'https://github.com/nan-apps/OpenFights',
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'clonoluchas',
                    'name' => 'ClonoLuchas',
                    'short_desc' => 'Juego basado en OpenFights con plantilla y nuevas features.',
                    'long_desc' => 'Juego basado en OpenFights con plantilla y nuevas features. Desarrollado enteramente en JavaScript.',
                    'link' => 'http://clonoluchas.nan-apps.com',
                    'github_link' => 'https://github.com/nan-apps/clonoluchas',
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'treefractalgenerator',
                    'name' => 'Tree Fractal Generator',
                    'short_desc' => 'Creador de arboles con geometría fractal mediante recursividad',
                    'long_desc' => 'Creador de arboles con geometría fractal mediante recursividad',
                    'link' => 'http://nan-apps.com/research/TreeFractalGenerator',
                    'github_link' => 'https://github.com/nan-apps/TreeFractalGenerator',
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => null
                ],
                [
                    'key' => 'gestorauto',
                    'name' => 'Gestor Automotriz',
                    'short_desc' => 'Administrador para gestores automotrices',
                    'long_desc' => 'Administrador para gestores automotrices. Realizado con PHP, framework CodeIgniter y ORM Doctrine para modelado de base de datos. Para el front se uso jquery y bootstrap responsive.',
                    'link' => null,
                    'github_link' => null,
                    'has_full_img' => true,
                    'img_ext' => 'png',
                    'partner_id' => $tinka
                ],
                [
                    'key' => 'we_avatar',
                    'name' => 'we_avatar',
                    'short_desc' => 'Selecciona una imagen de perfil desde tu webcam o mediante un upload usando HTML5 y JQuery',
                    'long_desc' => 'Contribucion a la librería JavaScript we_avatar. Selecciona una imagen de perfil desde tu webcam o mediante un upload usando HTML5 y JQuery',
                    'link' => 'http://blog.wecode.io/we_avatar/demo.html',
                    'github_link' => 'https://github.com/nan-apps/we_avatar',
                    'has_full_img' => false,
                    'img_ext' => 'png',
                    'partner_id' => $wecode
                ],
                [
                    'key' => 'afip_client',
                    'name' => 'AfipClient',
                    'short_desc' => 'Clases para interactuar con los servicios de afip',
                    'long_desc' => 'Libreria open source para interactuar con servicios de facturacion electronica de afip',
                    'link' => null,
                    'github_link' => 'https://github.com/nan-apps/AfipClient',
                    'has_full_img' => false,
                    'img_ext' => 'png'
                ],
                [
                    'key' => 'google_client',
                    'name' => 'GoogleClient',
                    'short_desc' => 'Clases para interactuar con la api de google',
                    'long_desc' => 'Libreria open source para interactuar con los servicios de google calendar.',
                    'link' => null,
                    'github_link' => 'https://github.com/nan-apps/GoogleClient',
                    'has_full_img' => false,
                    'img_ext' => 'png'
                ],

            ]   
        );
    }
}
