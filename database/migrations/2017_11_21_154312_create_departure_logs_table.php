<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartureLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departure_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_id')->nullable();
            $table->timestamp('date')->nullable();
	        $table->unsignedInteger('vehicle_id');
	        $table->unsignedInteger('weight');
	        $table->unsignedInteger('source_id');
	        $table->unsignedInteger('destination_id');
	        $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('source_id')->references('id')->on('sources');
            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
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
        Schema::dropIfExists('departure_logs');
    }
}
