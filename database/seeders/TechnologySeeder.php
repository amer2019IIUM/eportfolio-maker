<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->delete();

        $technologies=array(
         array('id' => '1', 'title'=>'Vuetify', 'version'=>'3.3'),
         array('id' => '2', 'title'=>'Monoose', 'version'=>'2.0'),
        );

        DB::table('technologies')->insert($technologies);        }
}
