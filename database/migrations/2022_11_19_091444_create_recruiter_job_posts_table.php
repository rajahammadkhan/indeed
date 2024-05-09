<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruiterJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiter_job_posts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('recruiter_id');
            $table->unsignedBigInteger('job_id');
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
        Schema::dropIfExists('recruiter_job_posts');
    }
}
