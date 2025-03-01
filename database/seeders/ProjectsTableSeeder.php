<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i < 11; $i++) {
            $project = new Project();
            $project->name = 'Titolo ' . $i;
            $project->subtitle = 'Sottotitolo ' . $i;
            $project->description = 'Descrizione ' . $i;
            $project->owner = 'Proprietario ' . $i;
            $project->save();
        }
    }
}
