<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        $projects=array(
         array('id' => '1', 'lang'=>'English', 'title'=>'Work in Google', 'desc'=>'I have worked in Google for more than 10 years', 'progress'=>80, 'source_code'=>'google.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>1, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'title'=>'Work in Facebook', 'desc'=>'I have worked in Facebook for more than 10 years', 'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        );

        DB::table('projects')->insert($projects);        }
}
