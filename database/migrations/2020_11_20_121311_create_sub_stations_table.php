<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_stations', function (Blueprint $table) {
            $table->increments('sub_station_id');
            $table->string('sub_station_name');
            $table->string('sub_station_desc');
            $table->integer('station_id')->unsigned()->index();
            $table->foreign('station_id')->references('station_id')->on('stations');
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
        Schema::dropIfExists('sub_stations');
    }
}
