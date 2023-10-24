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
            // Project Information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('office_address')->nullable();
            $table->string('cylinder_id')->nullable();
            $table->string('date')->nullable();
            $table->string('supplier')->nullable();
            $table->string('plant')->nullable();
            $table->string('sampled_by')->nullable();
            $table->string('created_by')->nullable();

            // Reference Data
            $table->text('type_of_structure')->nullable();
            $table->text('general_location')->nullable();
            $table->text('specific_location')->nullable();
            $table->text('mix_id')->nullable();
            $table->text('truck_no')->nullable();
            $table->text('ticket_no')->nullable();
            $table->text('batch_time')->nullable();
            $table->text('sample_time')->nullable();
            $table->text('ttf_unloading')->nullable();
            $table->text('ambient_temp')->nullable();
            $table->text('yards_at_sampling')->nullable();
            $table->text('total_yard_placement')->nullable();
            $table->text('water_added')->nullable();
            $table->text('water_cement_ratio')->nullable();

            // Physical Properties
            $table->text('air_content')->nullable();
            $table->text('air_min')->nullable();
            $table->text('air_max')->nullable();
            $table->text('slump')->nullable();
            $table->text('slump_min')->nullable();
            $table->text('slump_max')->nullable();
            $table->text('concrete_temp')->nullable();
            $table->text('concrete_temp_min')->nullable();
            $table->text('concrete_temp_max')->nullable();
            $table->text('unit_weight')->nullable();

            $table->text('min_a')->nullable();
            $table->text('min_b')->nullable();
            $table->text('min_c')->nullable();
            $table->text('max_a')->nullable();
            $table->text('max_b')->nullable();
            $table->text('max_c')->nullable();


            $table->string('yield')->nullable();
            $table->string('relative_yield')->nullable();
            $table->string('mix_design_strength')->nullable();
            $table->string('required_strength')->nullable();

            // Weather
            $table->text('weather')->nullable();
            $table->text('est_wind')->nullable();
            $table->text('est_rh')->nullable();
            $table->text('slump_cone_id')->nullable();
            $table->text('thermometer_id')->nullable();
            $table->text('air_meter_id')->nullable();
            $table->text('unit_weight_measure_id')->nullable();
            $table->text('weather_scale_id')->nullable();

            $table->text('cement')->nullable();
            $table->text('other_cementitious_matl')->nullable();
            $table->text('other_cementitious_matl_a')->nullable();
            $table->text('water')->nullable();
            $table->text('fine_aggregate')->nullable();
            $table->text('course_aggregate')->nullable();
            $table->text('max_aggregate_size')->nullable();
            $table->text('admixture_a')->nullable();
            $table->text('admixture_a_a')->nullable();
            $table->text('admixture_b')->nullable();
            $table->text('admixture_b_b')->nullable();
            $table->text('admixture_c')->nullable();
            $table->text('admixture_c_c')->nullable();
            $table->text('total_batch_weight')->nullable();

            $table->text('conc_comp_machine_id')->nullable();
            $table->text('caliper_id')->nullable();
            $table->text('scale_id')->nullable();

            $table->text('field')->nullable();
            $table->text('lab')->nullable();
            $table->text('time_cylinders_molded')->nullable();
            $table->text('cylinders_temperature_24h')->nullable();
            $table->text('where_cylinders_cured')->nullable();
            $table->text('field_placement_observations')->nullable();
            $table->text('remark')->nullable();

            $table->text('date_cylinders_received_lab')->nullable();
            $table->text('pick_up_by')->nullable();
            $table->text('cylinders_condition')->nullable();
            $table->text('test_hours')->nullable();
            $table->text('pick_up_hours')->nullable();
            $table->text('delayed_hours')->nullable();
            $table->text('why')->nullable();

            $table->text('status')->nullable();
            $table->text('responsible_person')->nullable();

            // COMPRESSIVE STRENGTHS
            $table->text('age_a')->nullable();
            $table->text('test_date_a')->nullable();
            $table->text('diameter_a')->nullable();
            $table->text('diameter_a_a')->nullable();
            $table->text('avg_length_a')->nullable();
            $table->text('mass_a')->nullable();
            $table->text('max_load_a')->nullable();
            $table->text('type_cap_a')->nullable();
            $table->text('area_cyl_a')->nullable();
            $table->text('measured_strength_a')->nullable();
            $table->text('specified_strength_a')->nullable();
            $table->text('type_fracture_a')->nullable();
            $table->text('person_performing_a')->nullable();

            $table->text('age_b')->nullable();
            $table->text('test_date_b')->nullable();
            $table->text('diameter_b')->nullable();
            $table->text('diameter_a_b')->nullable();
            $table->text('avg_length_b')->nullable();
            $table->text('mass_b')->nullable();
            $table->text('max_load_b')->nullable();
            $table->text('type_cap_b')->nullable();
            $table->text('area_cyl_b')->nullable();
            $table->text('measured_strength_b')->nullable();
            $table->text('specified_strength_b')->nullable();
            $table->text('type_fracture_b')->nullable();
            $table->text('person_performing_b')->nullable();

            $table->text('age_c')->nullable();
            $table->text('test_date_c')->nullable();
            $table->text('diameter_c')->nullable();
            $table->text('diameter_a_c')->nullable();
            $table->text('avg_length_c')->nullable();
            $table->text('mass_c')->nullable();
            $table->text('max_load_c')->nullable();
            $table->text('type_cap_c')->nullable();
            $table->text('area_cyl_c')->nullable();
            $table->text('measured_strength_c')->nullable();
            $table->text('specified_strength_c')->nullable();
            $table->text('type_fracture_c')->nullable();
            $table->text('person_performing_c')->nullable();

            $table->text('age_d')->nullable();
            $table->text('test_date_d')->nullable();
            $table->text('diameter_d')->nullable();
            $table->text('diameter_a_d')->nullable();
            $table->text('avg_length_d')->nullable();
            $table->text('mass_d')->nullable();
            $table->text('max_load_d')->nullable();
            $table->text('type_cap_d')->nullable();
            $table->text('area_cyl_d')->nullable();
            $table->text('measured_strength_d')->nullable();
            $table->text('specified_strength_d')->nullable();
            $table->text('type_fracture_d')->nullable();
            $table->text('person_performing_d')->nullable();

            $table->text('age_e')->nullable();
            $table->text('test_date_e')->nullable();
            $table->text('diameter_e')->nullable();
            $table->text('diameter_a_e')->nullable();
            $table->text('avg_length_e')->nullable();
            $table->text('mass_e')->nullable();
            $table->text('max_load_e')->nullable();
            $table->text('type_cap_e')->nullable();
            $table->text('area_cyl_e')->nullable();
            $table->text('measured_strength_e')->nullable();
            $table->text('specified_strength_e')->nullable();
            $table->text('type_fracture_e')->nullable();
            $table->text('person_performing_e')->nullable();

            $table->text('age_f')->nullable();
            $table->text('test_date_f')->nullable();
            $table->text('diameter_f')->nullable();
            $table->text('diameter_a_f')->nullable();
            $table->text('avg_length_f')->nullable();
            $table->text('mass_f')->nullable();
            $table->text('max_load_f')->nullable();
            $table->text('type_cap_f')->nullable();
            $table->text('area_cyl_f')->nullable();
            $table->text('measured_strength_f')->nullable();
            $table->text('specified_strength_f')->nullable();
            $table->text('type_fracture_f')->nullable();
            $table->text('person_performing_f')->nullable();

            $table->text('age_g')->nullable();
            $table->text('test_date_g')->nullable();
            $table->text('diameter_g')->nullable();
            $table->text('diameter_a_g')->nullable();
            $table->text('avg_length_g')->nullable();
            $table->text('mass_g')->nullable();
            $table->text('max_load_g')->nullable();
            $table->text('type_cap_g')->nullable();
            $table->text('area_cyl_g')->nullable();
            $table->text('measured_strength_g')->nullable();
            $table->text('specified_strength_g')->nullable();
            $table->text('type_fracture_g')->nullable();
            $table->text('person_performing_g')->nullable();

            $table->text('age_h')->nullable();
            $table->text('test_date_h')->nullable();
            $table->text('diameter_h')->nullable();
            $table->text('diameter_a_h')->nullable();
            $table->text('avg_length_h')->nullable();
            $table->text('mass_h')->nullable();
            $table->text('max_load_h')->nullable();
            $table->text('type_cap_h')->nullable();
            $table->text('area_cyl_h')->nullable();
            $table->text('measured_strength_h')->nullable();
            $table->text('specified_strength_h')->nullable();
            $table->text('type_fracture_h')->nullable();
            $table->text('person_performing_h')->nullable();

            $table->text('age_i')->nullable();
            $table->text('test_date_i')->nullable();
            $table->text('diameter_i')->nullable();
            $table->text('diameter_a_i')->nullable();
            $table->text('avg_length_i')->nullable();
            $table->text('mass_i')->nullable();
            $table->text('max_load_i')->nullable();
            $table->text('type_cap_i')->nullable();
            $table->text('area_cyl_i')->nullable();
            $table->text('measured_strength_i')->nullable();
            $table->text('specified_strength_i')->nullable();
            $table->text('type_fracture_i')->nullable();
            $table->text('person_performing_i')->nullable();
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
