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
            array('id' => '1', 'lang'=>'English', 'type'=>'technical', 'title'=>'MySql', 'sort'=>80,'percentage'=>80, 'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>1),
            array('id' => '2', 'lang'=>'Arabic', 'type'=>'professional', 'title'=>'MangoDB', 'sort'=>30, 'percentage'=>90,'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>2),
            array('id' => '3', 'lang'=>'Arabic', 'type'=>'professional', 'title'=>'Laravel', 'sort'=>30, 'percentage'=>70,'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>2),
            array('id' => '4', 'lang'=>'Arabic', 'type'=>'technical', 'title'=>'VueJs', 'sort'=>30, 'percentage'=>30,'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>2),
            array('id' => '5', 'lang'=>'English', 'type'=>'professional', 'title'=>'C++', 'sort'=>80,'percentage'=>20, 'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>1),
            array('id' => '6', 'lang'=>'English', 'type'=>'technical', 'title'=>'Management', 'sort'=>80,'percentage'=>90, 'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>1),
            array('id' => '7', 'lang'=>'English', 'type'=>'professional', 'title'=>'Communication', 'sort'=>80,'percentage'=>85, 'hidden_portfolio'=>1,'hidden_resume'=>1,  'user_id'=>1),

        );

        DB::table('skills')->insert($skills);        }
}
