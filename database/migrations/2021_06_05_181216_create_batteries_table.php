<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batteries', function (Blueprint $table) {
            $table->id();
            $table->integer('_id');
            $table->double('timestamp');
            $table->string('device_id')->nullable();
            $table->integer('battery_status');
            $table->integer('battery_level');
            $table->integer('battery_scale');
            $table->integer('battery_voltage');
            $table->integer('battery_temperature');
            $table->integer('battery_adaptor');
            $table->integer('battery_health');
            $table->string('battery_technology');
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
        Schema::dropIfExists('batteries');
    }
}
