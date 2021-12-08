<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang');
            $table->string('company');
            $table->date('from');
            $table->date('to');
            $table->string('job_title');
            $table->string('core_duties');
            $table->text('location');
            $table->text('further_details');
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('hidden_resume')->nullable();
            $table->boolean('hidden_portfolio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
