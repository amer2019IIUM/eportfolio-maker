<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $skills=array(
         array('id' => '1', 'lang'=>'English', 'type'=>'Technology', 'title'=>'MySql', 'sort'=>80,  'user_id'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'type'=>'Technology', 'title'=>'MangoDB', 'sort'=>30,  'user_id'=>2),
        );

        DB::table('skills')->insert($skills);        }
}
