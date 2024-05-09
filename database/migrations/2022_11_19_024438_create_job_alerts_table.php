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
        Schema::create('job_alerts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->string('job_title')->nullable();
            $table->string('location_name')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->Default('1');
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
        Schema::dropIfExists('job_alerts');
    }
};
