<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionConcreteSetEightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_concrete_set_eights', function (Blueprint $table) {
            $table->id();
            // project information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('date')->nullable();
            // weather information
            $table->text('weather')->nullable();
            $table->string('est_wind')->nullable();
            $table->string('est_rh')->nullable();
            // Equipment Identification
            $table->text('slump_cone')->nullable();
            $table->text('thermometer')->nullable();
            $table->text('air_meter')->nullable();
            $table->text('unit_weight_measure')->nullable();
            $table->string('scale_id')->nullable();
            $table->text('general_location')->nullable();
            // Mix information
            $table->string('office_address')->nullable();
            $table->string('contractor')->nullable();
            $table->string('mix_supplier')->nullable();
            $table->text('plant')->nullable();
            $table->text('mix_id')->nullable();
            $table->text('design_strength')->nullable();
            $table->text('required_strength')->nullable();
            $table->text('specified_slump_min')->nullable();
            $table->text('specified_slump_max')->nullable();
            $table->text('specified_air_min')->nullable();
            $table->text('specified_air_max')->nullable();
            $table->text('conc_temp_min')->nullable();
            $table->text('conc_temp_max')->nullable();
            $table->string('cement_ib')->nullable();
            $table->string('cementitious_malt')->nullable();
            $table->string('water')->nullable();
            $table->string('fine_aggregate')->nullable();
            $table->text('course_aggregate')->nullable();
            $table->text('max_aggregate')->nullable();
            $table->text('admixture_one')->nullable();
            $table->text('admixture_two')->nullable();
            $table->text('admixture_three')->nullable();
            // basic information
            $table->string('user_id')->nullable();
            $table->text('remark')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
            $table->string('total_yds')->nullable();
            $table->string('representative')->nullable();
            $table->string('responsible_person')->default();
            $table->string('observation')->nullable();
            // Test Results
            $table->text('test_no_a')->nullable();
            $table->text('ticket_no_a')->nullable();
            $table->text('truck_no_a')->nullable();
            $table->text('truck_dispatched_a')->nullable();
            $table->text('time_sample_taken_a')->nullable();
            $table->text('time_truck_finished_a')->nullable();
            $table->text('batch_size_a')->nullable();
            $table->text('total_cumulative_a')->nullable();
            $table->text('slump_a')->nullable();
            $table->text('air_cont_a')->nullable();
            $table->text('unit_wt_a')->nullable();
            $table->text('air_temp_a')->nullable();
            $table->text('conc_temp_a')->nullable();
            $table->text('location_a')->nullable();
            $table->text('water_added_before_test_a')->nullable();
            $table->text('water_added_after_test_a')->nullable();
            $table->text('cylinder_set_no_a')->nullable();
            $table->text('wc_ratio_a')->nullable();
            $table->text('relative_yield_a')->nullable();
            $table->text('type_a')->nullable();
            $table->text('dimensions_a')->nullable();
            $table->text('cyls_cast_a')->nullable();
            $table->text('age_days_a')->nullable();
            
            $table->text('test_no_b')->nullable();
            $table->text('ticket_no_b')->nullable();
            $table->text('truck_no_b')->nullable();
            $table->text('truck_dispatched_b')->nullable();
            $table->text('time_sample_taken_b')->nullable();
            $table->text('time_truck_finished_b')->nullable();
            $table->text('batch_size_b')->nullable();
            $table->text('total_cumulative_b')->nullable();
            $table->text('slump_b')->nullable();
            $table->text('air_cont_b')->nullable();
            $table->text('unit_wt_b')->nullable();
            $table->text('air_temp_b')->nullable();
            $table->text('conc_temp_b')->nullable();
            $table->text('location_b')->nullable();
            $table->text('water_added_before_test_b')->nullable();
            $table->text('water_added_after_test_b')->nullable();
            $table->text('cylinder_set_no_b')->nullable();
            $table->text('wc_ratio_b')->nullable();
            $table->text('relative_yield_b')->nullable();
            $table->text('type_b')->nullable();
            $table->text('dimensions_b')->nullable();
            $table->text('cyls_cast_b')->nullable();
            $table->text('age_days_b')->nullable();

            $table->text('test_no_c')->nullable();
            $table->text('ticket_no_c')->nullable();
            $table->text('truck_no_c')->nullable();
            $table->text('truck_dispatched_c')->nullable();
            $table->text('time_sample_taken_c')->nullable();
            $table->text('time_truck_finished_c')->nullable();
            $table->text('batch_size_c')->nullable();
            $table->text('total_cumulative_c')->nullable();
            $table->text('slump_c')->nullable();
            $table->text('air_cont_c')->nullable();
            $table->text('unit_wt_c')->nullable();
            $table->text('air_temp_c')->nullable();
            $table->text('conc_temp_c')->nullable();
            $table->text('location_c')->nullable();
            $table->text('water_added_before_test_c')->nullable();
            $table->text('water_added_after_test_c')->nullable();
            $table->text('cylinder_set_no_c')->nullable();
            $table->text('wc_ratio_c')->nullable();
            $table->text('relative_yield_c')->nullable();
            $table->text('type_c')->nullable();
            $table->text('dimensions_c')->nullable();
            $table->text('cyls_cast_c')->nullable();
            $table->text('age_days_c')->nullable();

            $table->text('test_no_d')->nullable();
            $table->text('ticket_no_d')->nullable();
            $table->text('truck_no_d')->nullable();
            $table->text('truck_dispatched_d')->nullable();
            $table->text('time_sample_taken_d')->nullable();
            $table->text('time_truck_finished_d')->nullable();
            $table->text('batch_size_d')->nullable();
            $table->text('total_cumulative_d')->nullable();
            $table->text('slump_d')->nullable();
            $table->text('air_cont_d')->nullable();
            $table->text('unit_wt_d')->nullable();
            $table->text('air_temp_d')->nullable();
            $table->text('conc_temp_d')->nullable();
            $table->text('location_d')->nullable();
            $table->text('water_added_before_test_d')->nullable();
            $table->text('water_added_after_test_d')->nullable();
            $table->text('cylinder_set_no_d')->nullable();
            $table->text('wc_ratio_d')->nullable();
            $table->text('relative_yield_d')->nullable();
            $table->text('type_d')->nullable();
            $table->text('dimensions_d')->nullable();
            $table->text('cyls_cast_d')->nullable();
            $table->text('age_days_d')->nullable();
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
        Schema::dropIfExists('inspection_concrete_set_eights');
    }
}
