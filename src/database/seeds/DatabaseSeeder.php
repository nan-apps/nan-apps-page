<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
