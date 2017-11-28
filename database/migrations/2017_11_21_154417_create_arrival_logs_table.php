<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrival_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date')->nullable();
            $table->unsignedInteger('gross');
            $table->unsignedInteger('deduction');
            $table->unsignedInteger('departure_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('departure_id')->references('id')->on('departure_logs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrival_logs');
    }
}
