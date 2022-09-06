<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::first();
        $faker = Factory::create();

        for ($i=0; $i < 100; $i++) { 
            $data = [
                'name' => $faker->sentence(3),
                'project_id' => 4,
                'description' => $faker->paragraph(),
                'status' => 'PENDING',
            ];

            Task::create($data);
        }
    }
}
