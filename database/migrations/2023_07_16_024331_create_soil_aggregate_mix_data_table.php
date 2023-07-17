<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilAggregateMixDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_aggregate_mix_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('soil_aggregate_id')->unsigned()->nullable();
            $table->string('mix_id')->nullable();
            $table->string('supplier')->nullable();
            $table->string('plant')->nullable();
            $table->string('mix_type')->nullable();
            $table->string('max_theoretical_density')->nullable();
            $table->string('max_theoretical_specific_gravity')->nullable();
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
        Schema::dropIfExists('soil_aggregate_mix_data');
    }
}
