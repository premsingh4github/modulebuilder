<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobExtraDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_extra_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('educationalqualification_id')->unsigned()->nullable();
            $table->foreign('educationalqualification_id')->references('id')->on('educationalqualifications');
            $table->integer('joblevel_id')->unsigned()->nullable();
            $table->foreign('joblevel_id')->references('id')->on('joblevels');
            $table->integer('industry_id')->unsigned()->nullable();
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->integer('jobtype_id')->unsigned()->nullable();
            $table->foreign('jobtype_id')->references('id')->on('jobtypes');
            $table->integer('jobcategory_id')->unsigned()->nullable();
            $table->foreign('jobcategory_id')->references('id')->on('jobcategories');
            $table->float('salaryMin')->nullable();
            $table->float('salaryMax')->nullable();
            $table->float('experienceMin')->nullable();
            $table->float('experienceMax')->nullable();
            $table->text('otherBenefit')->nullable();
            $table->text('skill')->nullable();
            $table->date('publishDate')->nullable();
            $table->enum('visibility',['0','1','2']);
            $table->text('applyMethod')->nullable();
            $table->enum('coverLetterRequired',['0','1']);
            $table->enum('resumeRequired',['0','1']);

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
        Schema::drop('job_extra_details');
    }
}