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
         array('id' => '1', 'lang'=>'English', 'title'=>'E-commmerce system', 'desc'=>'I have worked in Google for more than 10 years','used_technologies'=>json_encode(['Laravel']) , 'progress'=>80, 'source_code'=>'google.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>1, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'title'=>'LMS', 'desc'=>'I have worked in Facebook for more than 10 years', 'progress'=>30, 'used_technologies'=>json_encode(['Laravel']) , 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '3', 'lang'=>'Arabic', 'title'=>'Tutoring system', 'desc'=>'I have worked in Facebook for more than 10 years','used_technologies'=>json_encode(['Laravel']) ,  'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '4', 'lang'=>'Arabic', 'title'=>'Mobile app for eldery people', 'desc'=>'I have worked in Facebook for more than 10 years','used_technologies'=>json_encode(['Laravel']) ,  'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '5', 'lang'=>'Arabic', 'title'=>'Event Booking system', 'desc'=>'I have worked in Facebook for more than 10 years', 'used_technologies'=>json_encode(['Laravel']) , 'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '6', 'lang'=>'Arabic', 'title'=>'Professional doctor system', 'desc'=>'I have worked in Facebook for more than 10 years','used_technologies'=>json_encode(['Laravel']) ,  'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '7', 'lang'=>'Arabic', 'title'=>'remote teaching system', 'desc'=>'I have worked in Facebook for more than 10 years', 'used_technologies'=>json_encode(['Laravel']) , 'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '8', 'lang'=>'Arabic', 'title'=>'B2B system', 'desc'=>'I have worked in Facebook for more than 10 years','used_technologies'=>json_encode(['Laravel']) ,  'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '9', 'lang'=>'Arabic', 'title'=>'Lazada system', 'desc'=>'I have worked in Facebook for more than 10 years','used_technologies'=>json_encode(['Laravel']) ,  'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>1),
         array('id' => '10', 'lang'=>'Arabic', 'title'=>'Gaming system', 'desc'=>'I have worked in Facebook for more than 10 years', 'used_technologies'=>json_encode(['Laravel']) , 'progress'=>30, 'source_code'=>'facebook.com', 'icon'=>'', 'last_update'=>'2021-11-26 17:00:49','sort'=>2, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'user_id'=>2),
        );

        DB::table('projects')->insert($projects);        }
}
