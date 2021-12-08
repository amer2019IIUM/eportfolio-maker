<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interests')->delete();

        $interests=array(
         array('id' => '1', 'lang'=>'English', 'title'=>'Love Programming ',  'user_id'=>1, 'hidden_portfolio'=>1,'hidden_resume'=>1, 'sort'=>1),
         array('id' => '2', 'lang'=>'Arabic', 'title'=>'Commincaiton ', 'user_id'=>2,'hidden_portfolio'=>1,'hidden_resume'=>1, 'sort'=>2),
 
        );
        DB::table('interests')->insert($interests);    
    }
}
