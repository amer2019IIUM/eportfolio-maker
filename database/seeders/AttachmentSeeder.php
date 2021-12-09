<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attachments')->delete();
 
        $attachments=array(

        ///Images for projects
         array('id' => '1','attachable_id'=>'1','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '2','attachable_id'=>'1','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '3','attachable_id'=>'1','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '4','attachable_id'=>'1','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '5','attachable_id'=>'1','attachable_type'=>'project','title'=>'profile image','link'=>'https://media-exp1.licdn.com/dms/image/C5103AQHl49hQvQeKGg/profile-displayphoto-shrink_200_200/0/1566916027452?e=1644451200&v=beta&t=jKSOYeYW_eGThVMKZ2UsSBPzWat99LgcIMfbmWcXLeQ','type'=>'photo',),
         array('id' => '6','attachable_id'=>'2','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '7','attachable_id'=>'2','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '8','attachable_id'=>'2','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
         array('id' => '9','attachable_id'=>'2','attachable_type'=>'project','title'=>'Project image','link'=>'https://image.freepik.com/free-vector/business-start-up-concept-illustration_107791-86.jpg?1','type'=>'photo',),
        );
        DB::table('attachments')->insert($attachments); 
       }
}
