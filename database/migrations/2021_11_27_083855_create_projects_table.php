<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang');
            $table->string('title');
            $table->longText('desc');
            $table->json('used_technologies');
            $table->integer('progress');
            $table->string('source_code');
            $table->string('icon');
            $table->date('last_update')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('hidden_resume')->nullable();
            $table->boolean('hidden_portfolio')->nullable();
            $table->integer('sort')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
