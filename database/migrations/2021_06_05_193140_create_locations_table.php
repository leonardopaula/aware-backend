<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->integer('_id');
            $table->double('timestamp');
            $table->string('device_id')->nullable();
            $table->double('double_latitude');
            $table->double('double_longitude');
            $table->double('double_bearing');
            $table->double('double_speed');
            $table->double('double_altitude');
            $table->string('provider');
            $table->double('accuracy');
            $table->string('label')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
