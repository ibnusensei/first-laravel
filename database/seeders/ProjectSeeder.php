<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'GuruInovatif',
            'leader_id' => 1, 
            'owner' => 'Digitaliz', 
            'deadline' => date('Y-m-d'), 
            'progress' => 0, 
            'description' => 'Description',
        ];

        Project::create($data);
    }
}
