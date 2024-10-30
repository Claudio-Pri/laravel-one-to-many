<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//per slug da documentazione laravel
use Illuminate\Support\Str;

//Models
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i = 0; $i < 5; $i++) {
            $title = fake()->catchPhrase();
            //slug da documentazione laravel
            $slug = Str::of($title)->slug('-');
            Project::create([
                'title' => $title,
                'slug' => $slug,
                'url' => fake()->url(),
                'description' => fake()->paragraph(),
            ]);
        }
    }
}
