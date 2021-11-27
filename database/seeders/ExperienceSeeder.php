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
         array('id' => '1', 'lang'=>'English', 'company'=>'Google',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'job_title'=>'Programmer', 'core_duties'=>'Full stack developer  ', 'location'=>'Kuala Lumpur', 'further_details'=>'NO Details','user_id'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'company'=>'Facebooj',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'job_title'=>'HR', 'core_duties'=>'Mananging Human Resources', 'location'=>'Istanbul', 'further_details'=>'NO Details','user_id'=>2),
 
        );
        DB::table('experiences')->insert($experiences);    
    }
}
