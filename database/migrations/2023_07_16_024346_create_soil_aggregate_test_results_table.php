<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilAggregateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_aggregate_test_results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('soil_aggregate_id')->unsigned()->nullable();
            $table->string('test_no')->nullable();
            $table->string('result_mix_id')->nullable();
            $table->string('count_period')->nullable();
            $table->string('material')->nullable();
            $table->string('lift')->nullable();
            $table->string('layer_thickness')->nullable();
            $table->string('max_theory_density')->nullable();
            $table->string('field_wet_density')->nullable();
            $table->string('relative_compaction')->nullable();
            $table->string('pass_fail')->nullable();
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
        Schema::dropIfExists('soil_aggregate_test_results');
    }
}
