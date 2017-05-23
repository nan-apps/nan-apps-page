<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert(
        	[
                [
                    'key' => 'birthdate',
                    'value' => '1986-05-15'
                ],
                [
                    'key' => 'developer',
                    'value' => 'Gastón R.Nan'
                ],
                [
                    'key' => 'title',
                    'value' => 'Indie Developer <i class="hidden-xs" >( Programador Web Independiente )</i>'
                ],
                [
                    'key' => 'location',
                    'value' => 'Buenos Aires, Argentina'
                ],
                [
                    'key' => 'email',
                    'value' => 'gaston@nan-apps.com'
                ],                
                [
                    'key' => 'programming_startdate',
                    'value' => '2009-09-01'
                ],
                [
                    'key' => 'about_me',
                    'value' => '<p>Hola! Me llamo Gastón, tengo %age% años y vivo en Buenos Aires, Argentina. </p>
                                <p>La programación no es solo para mi un medio de vida si no también uno de mis grandes hobbies. Trabajé en distintas empresas de sistemas desarrolando aplicaciones web por 6 años hasta que finalmente en 2015 lancé mi carrera independiente como programador freelance.</p>    

                                <p>En esta nueva etapa me dedico al desarrollo integral de aplicaciones web, programando tanto del lado del cliente como del lado del servidor ya sea para cliente finales o para empresas del area de sistemas.</p>
                                <p>Por otro lado me encuentro en la búsqueda para sumar proyectos cuyos objetivos sean de mi interés o donde yo vea que haya pasión y corazón, asi que cualquier duda no duden en consultarme <i class="fa fa-smile-o" ></i></p>
                                <hr/>
                                <p class="pull-right" ><i>Gastu, 24/12/2016</i></p>'
                ],
                [
                    'key' => 'skills',
                    'value' => 'Cuento con %programming_startdate% años de experiencia en programación tanto back-end como front-end.'
                ],                


            ]   
        );
    }
}
