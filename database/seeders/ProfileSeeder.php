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
         array('id' => '1', 'first_name'=>'Amer', 'last_name'=>'Gaber', 'lang'=>'Yemen', 'user_id'=>'1','country'=>'Yemen', 'city'=>'IBB', 'nationality'=>'Yemen', 'summary'=>'Hello, I’m a Patrick, web-developer based on Malaysia. I have rich experience in web site design & building and customization.', 'headline'=>'Product Designer', ),
         array('id' => '2', 'first_name'=>'Moaadh', 'last_name'=>'Alhadad', 'lang'=>'Yemen', 'user_id'=>'2','country'=>'Yemen','city'=>'IBB', 'nationality'=>'Yemen', 'summary'=>'Hello, I’m Moadth, web-developer in Zad company. I have rich experience in web site design & building and customization.', 'headline'=>'Web Developer' ),
        );
        DB::table('profiles')->insert($profiles);    
    }
}
