<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateOneDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_one_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('template_one_id')->unsigned();
            $table->string('test_no')->nullable();
            $table->string('ticket_no')->nullable();
            $table->string('truck_no')->nullable();
            $table->string('truck_dispatched')->nullable();
            $table->string('time_sample_taken')->nullable();
            $table->string('time_truck_finished')->nullable();
            $table->string('batch_size')->nullable();
            $table->string('total_cumulative')->nullable();
            $table->string('slump')->nullable();
            $table->string('air_cont')->nullable();
            $table->string('unit_wt')->nullable();
            $table->string('air_temp')->nullable();
            $table->string('conc_temp')->nullable();

            $table->string('location')->nullable();
            $table->string('water_added_before_test')->nullable();
            $table->string('water_added_after_test')->nullable();

            $table->string('cylinder_set_no')->nullable();
            $table->string('wc_ratio')->nullable();
            $table->string('relative_yield')->nullable();

            $table->string('type')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('cyls_cast')->nullable();
            $table->string('age_days')->nullable();
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
        Schema::dropIfExists('template_one_data');
    }
}
