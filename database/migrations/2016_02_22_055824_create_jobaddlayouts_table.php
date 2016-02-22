<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobaddlayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobaddlayouts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
			$table->string('logo')->nullable();
			$table->integer('logo_position')->nullable();
			$table->string('header')->nullable();
			$table->integer('header_position')->nullable();
			$table->string('button_color')->nullable();
			$table->string('background_color')->nullable();
			$table->string('text_color')->nullable();

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
        Schema::drop('jobaddlayouts');
    }

}
