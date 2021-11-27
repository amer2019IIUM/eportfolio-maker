<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->delete();

        $profiles=array(
         array('id' => '1', 'first_name'=>'Amer', 'last_name'=>'Gaber', 'lang'=>'Yemen', 'user_id'=>'1','country'=>'Yemen', 'city'=>'IBB', 'nationality'=>'Yemen', 'summary'=>'Good in Laravel and everything', 'headline'=>'NO Details', ),
         array('id' => '2', 'first_name'=>'Moaadh', 'last_name'=>'Alhadad', 'lang'=>'Yemen', 'user_id'=>'2','country'=>'Yemen','city'=>'IBB', 'nationality'=>'Yemen', 'summary'=>'Cannot make any line of code', 'headline'=>'NO Details' ),
 
        );
        DB::table('profiles')->insert($profiles);    
    }
}
