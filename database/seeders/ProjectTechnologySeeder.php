<?php

namespace Database\Seeders;

use App\Models\ProjectTechnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_technology')->delete();

        $project_technologies=array(
         array('id' => '1', 'project_id'=>1, 'technology_id'=>1, ),
         array('id' => '2', 'project_id'=>1, 'technology_id'=>1),
        );
 
        DB::table('project_technology')->insert($project_technologies);       }
}
