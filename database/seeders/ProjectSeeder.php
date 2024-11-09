<?php

namespace Database\Seeders;

use App\Models\Project;
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
        for ($i = 0; $i < 30; $i++) {
            $project = new Project();
            $project->name = $faker->unique()->words(3, true);
            $project->date = $faker->dateTimeBetween('2023-08php artisan migrate:fresh --seed-01', '2023-11-30')->format('Y-m-d');
            $project->description = $faker->paragraph();
            $project->languages = $faker->words(3, true);
            $project->save();
        }
    }
}
