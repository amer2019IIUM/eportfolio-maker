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
       DB::table('educations')->delete();

       $educations=array(
        array('id' => '1', 'lang'=>'English','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum','degree'=>'Master', 'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.6', 'headline'=>'Multi Media (Laravel & Vuejs)', 'school'=>'IIUM', 'country'=>'Yemen', 'city'=>'IBB', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
        array('id' => '2', 'lang'=>'English','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum','degree'=>'Degree', 'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.6', 'headline'=>'UI/UX Designer', 'school'=>' Oxford University', 'country'=>'Yemen', 'city'=>'IBB', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
        array('id' => '3', 'lang'=>'English','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum','degree'=>'Master', 'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.6', 'headline'=>'Art & Multimedia', 'school'=>'IronSketch', 'country'=>'Yemen', 'city'=>'IBB', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
        array('id' => '4', 'lang'=>'Arabic','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'degree'=>'Degree',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.5', 'headline'=>'Computer science', 'school'=>'IIUM', 'country'=>'Egypt', 'city'=>'Cairo', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        array('id' => '5', 'lang'=>'Arabic','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'degree'=>'Master',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.5', 'headline'=>'Business Intelligence', 'school'=>'IIUM', 'country'=>'Egypt', 'city'=>'Cairo', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        array('id' => '6', 'lang'=>'Arabic','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'degree'=>'Degree',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.5', 'headline'=>'Business Intelligence', 'school'=>'IIUM', 'country'=>'Egypt', 'city'=>'Cairo', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        array('id' => '7', 'lang'=>'Arabic','desc'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'degree'=>'Master',  'from'=>'2016/06/24', 'to'=>'2017/06/24', 'CGPA'=>'3.5', 'headline'=>'Business Intelligence', 'school'=>'IIUM', 'country'=>'Egypt', 'city'=>'Cairo', 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),

       );
       DB::table('educations')->insert($educations);
    }
}
