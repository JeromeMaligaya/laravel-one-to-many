<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // $table->id();
    // $table->string("name", 255)->unique()->nullable(false);
    // $table->date("date")->nullable(false);
    // $table->text('description')->nullable();
    // $table->text('languages')->nullable();
    // $table->timestamps();
    public function run(Faker $faker): void
    {
        $types = Type::all()->pluck("id");

        $projects = [
            [
                "name" => "html-css-booleaner",
                "date" => "2024-07-01",
                "description" => "/",
                "type_id" => 2,
            ],
            [
                "name" => "htmlcss-discord",
                "date" => "2014-07-08",
                "description" => "/",
                "type_id" => 2,
            ],
            [
                "name" => "html-css-spotifyweb",
                "date" => "2024-07-19",
                "description" => "/",
                "type_id" => 2,
            ],
            [
                "name" => "vue-boolzapp",
                "date" => "2024-09-06",
                "description" => "/",
                "type_id" => 2,
            ],
            [
                "name" => "vite-yu-gi-oh",
                "date" => "2024-09-18",
                "description" => "/",
                "type_id" => 4,
            ],
            [
                "name" => "vite-boolflix",
                "date" => "2024-09-25",
                "description" => "/",
                "type_id" => 4,
            ],
            [
                "name" => "php-hotel",
                "date" => "2024-10-03",
                "description" => "/",
                "type_id" => 4,
            ],
            [
                "name" => "laravel-dc-comics",
                "date" => "2024-09-29",
                "description" => "/",
                "type_id" => 3,
            ],
            [
                "name" => "laravel-auth",
                "date" => "2014-11-04",
                "description" => "/",
                "type_id" => 1,
            ],
            [
                "name" => "laravel-one-to-many",
                "date" => "2024-11-07",
                "description" => "/",
                "type_id" => 1,
            ],
        ];
        foreach ($projects as $singleProject) {
            $project = new Project();
            $project->name = $singleProject['name'];
            $project->date = $singleProject['date'];
            $project->description = $singleProject['description'];
            $project->type_id = $singleProject['type_id'];
            $project->save();
        }
    }
}
