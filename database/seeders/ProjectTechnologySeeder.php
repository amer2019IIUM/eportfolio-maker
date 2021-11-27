<?php

namespace Database\Seeders;

use App\Models\ProjectTechnology;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectTechnology::factory()->count(2)->create();
    }
}
