<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->title = $faker->words(3, true);
            $project->content = $faker->text(500);
            $project->deadline = $faker->date('Y-m-d');
            $project->category_id = rand(1,4);
            $project->save();
        }
    }
}
