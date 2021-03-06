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
        $this->call(TagsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ProjectTagTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
    }
}
