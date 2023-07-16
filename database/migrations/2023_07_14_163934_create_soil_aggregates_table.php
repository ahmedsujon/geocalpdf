<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilAggregatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_aggregates', function (Blueprint $table) {
            $table->id();
            // project information
            $table->string('client_id')->nullable();
            $table->string('project_id')->nullable();
            $table->string('project_number')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('technician')->nullable();
            $table->string('weather')->nullable();
            // gauge information
            $table->string('office_address')->nullable();
            $table->string('troxler')->nullable();
            $table->string('other')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('density_count')->nullable();
            $table->string('moisture_count')->nullable();
            $table->string('moisture_equation')->nullable();

            $table->string('test_mode')->nullable();
            $table->string('compaction_requirement_min')->nullable();
            $table->string('compaction_requirement_max')->nullable();
            $table->text('general_location')->nullable();

            $table->text('remark')->nullable();
            $table->string('status')->nullable();
            $table->string('responsible_person')->nullable();
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
        Schema::dropIfExists('soil_aggregates');
    }
}
