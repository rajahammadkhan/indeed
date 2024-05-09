<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->string('industry_id');
            $table->string('department_id');
            $table->string('job_type_id');
            $table->string('location_id');
            $table->string('status')->Default('1');
            $table->string('job_title')->nullable();
            $table->string('job_status')->nullable();
            $table->string('advertise_job')->nullable();
            $table->string('screening_question')->nullable();
            $table->string('question_answer')->nullable();
            $table->string('minimum_pay')->nullable();
            $table->string('maximum_pay')->nullable();
            $table->string('pay_rate')->nullable();
            $table->string('start_date')->nullable();
            $table->string('job_description')->nullable();
            $table->string('postcode')->nullable();
            $table->string('agreed')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('post_jobs');
    }
};
