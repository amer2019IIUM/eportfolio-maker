<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->delete();

        $experiences=array(
         array('id' => '1', 'lang'=>'English', 'company'=>'Google',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'job_title'=>'Programmer', 'core_duties'=>json_encode(['Programming','Human resources']) , 'location'=>'Kuala Lumpur', 'further_details'=>'Responsibility :
         Validate CSS Project Management','hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'company'=>'Facebook',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'job_title'=>'HR', 'core_duties'=> json_encode(['Human resources','Programming']) , 'location'=>'Istanbul', 'further_details'=>'Managing  more than 1000 department','hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        );
        DB::table('experiences')->insert($experiences);    
    }
}
