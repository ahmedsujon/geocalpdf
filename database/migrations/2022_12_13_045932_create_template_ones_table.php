<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_ones', function (Blueprint $table) {
            $table->id();
            // project information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('date')->nullable();
            // weather information
            $table->string('weather')->nullable();
            $table->string('est_wind')->nullable();
            $table->string('est_rh')->nullable();
            // Equipment Identification
            $table->string('slump_cone')->nullable();
            $table->string('thermometer')->nullable();
            $table->string('air_meter')->nullable();
            $table->string('unit_weight_measure')->nullable();
            $table->string('scale_id')->nullable();

            $table->string('general_location')->nullable();

            // Mix information
            $table->string('office_address')->nullable();
            $table->string('contractor')->nullable();
            $table->string('mix_supplier')->nullable();
            $table->string('plant')->nullable();
            $table->string('mix_id')->nullable();
            $table->string('design_strength')->nullable();
            $table->string('required_strength')->nullable();

            $table->string('specified_slump_min')->nullable();
            $table->string('specified_slump_max')->nullable();

            $table->string('specified_air_min')->nullable();
            $table->string('specified_air_max')->nullable();

            $table->string('conc_temp_min')->nullable();
            $table->string('conc_temp_max')->nullable();

            $table->string('cement_ib')->nullable();
            $table->string('cementitious_malt')->nullable();
            $table->string('water')->nullable();
            $table->string('fine_aggregate')->nullable();
            $table->string('course_aggregate')->nullable();
            $table->string('max_aggregate')->nullable();
            $table->string('admixture_one')->nullable();
            $table->string('admixture_two')->nullable();
            $table->string('admixture_three')->nullable();
            // basic information
            $table->string('user_id')->nullable();
            $table->text('remark')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();

            $table->string('total_yds')->nullable();
            $table->string('representative')->nullable();
            $table->string('responsible_person')->default();
            $table->string('observation')->nullable();

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
        Schema::dropIfExists('template_ones');
    }
}
