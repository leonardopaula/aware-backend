<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccelerometersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accelerometers', function (Blueprint $table) {
            $table->id();
            $table->integer('_id');
            $table->double('timestamp');
            $table->string('device_id')->nullable();
            $table->double('double_values_0');
            $table->double('double_values_1');
            $table->double('double_values_2');
            $table->integer('accuracy');
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
        Schema::dropIfExists('accelerometers');
    }
}
