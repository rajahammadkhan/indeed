<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->string('user_email')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('additional_question')->nullable();
            $table->string('proficiency_level')->nullable();
            $table->string('document_pdf')->nullable();
            $table->string('agreed')->nullable();
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
        Schema::dropIfExists('applied_jobs');
    }
}
