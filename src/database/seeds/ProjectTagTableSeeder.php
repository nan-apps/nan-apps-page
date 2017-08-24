<?php

use Illuminate\Database\Seeder;

class ProjectTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//tag ids
        $opensource = App\Tag::where('key', 'opensource')->first()->id;
        $responsive = App\Tag::where('key', 'responsive')->first()->id;
        $auto = App\Tag::where('key', 'auto')->first()->id;
        $game = App\Tag::where('key', 'game')->first()->id;
        $research = App\Tag::where('key', 'research')->first()->id;
        $abml = App\Tag::where('key', 'abml')->first()->id;
        $highlighted = App\Tag::where('key', 'highlighted')->first()->id;
        $library = App\Tag::where('key', 'library')->first()->id;

        //asigno tags a proyectos
        App\Project::where('key', 'kuruf')->first()->tags()->attach([ $responsive, $abml, $highlighted ]);

    	App\Project::where('key', 'fe')->first()->tags()->attach([ $responsive, $highlighted, $auto ]);
									      
    	App\Project::where('key', 'flowmax')->first()->tags()->attach([ $responsive, $abml ]);
		
		App\Project::where('key', 'socol')->first()->tags()->attach([ $responsive, $highlighted ]);

        App\Project::where('key', 'opciones')->first()->tags()->attach([ $responsive, $abml ]);

        App\Project::where('key', 'gestorauto')->first()->tags()->attach([ $responsive, $abml ]);

        App\Project::where('key', 'roo')->first()->tags()->attach([ $abml ]);

        App\Project::where('key', 'lemon')->first()->tags()->attach([ $responsive ]);

        App\Project::where('key', 'processing_experiments')->first()->tags()->attach([ $research, $opensource ]);

        App\Project::where('key', 'clonoluchas')->first()->tags()->attach([ $game, $research, $highlighted, $opensource ]);

        App\Project::where('key', 'openfights')->first()->tags()->attach([ $game, $research, $opensource ]);

        App\Project::where('key', 'treefractalgenerator')->first()->tags()->attach([ $research, $opensource ]);

        App\Project::where('key', 'we_avatar')->first()->tags()->attach([ $opensource, $library ]);

        App\Project::where('key', 'afip_client')->first()->tags()->attach([ $opensource, $highlighted, $library]);

        App\Project::where('key', 'google_client')->first()->tags()->attach([ $opensource, $library ]);

    }
}
