<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('education')->delete();

       $educations=array(
        array('id' => '1', 'lang'=>'English', 'degree'=>'bachelor', 'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.6', 'headline'=>'Full stack developer (Laravel & Vuejs)', 'school'=>'Emas', 'country'=>'Yemen', 'city'=>'IBB', 'hidden'=>1, 'user_id'=>1),
        array('id' => '2', 'lang'=>'Arabic', 'degree'=>'bachelor',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.5', 'headline'=>'Software Engineer', 'school'=>'Yemeni School', 'country'=>'Egypt', 'city'=>'Cairo', 'hidden'=>0, 'user_id'=>2),

       );
       DB::table('education')->insert($educations);
    }
}
