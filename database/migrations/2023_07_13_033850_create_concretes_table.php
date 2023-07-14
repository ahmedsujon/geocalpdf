<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concretes', function (Blueprint $table) {
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
            $table->integer('ambient_temp')->nullable();
            $table->integer('yards_at_sampling')->nullable();
            $table->integer('total_yard_placement')->nullable();
            $table->integer('water_added')->nullable();
            $table->integer('water_cement_ratio')->nullable();

            // Physical Properties
            $table->string('air_content')->nullable();
            $table->string('slump')->nullable();
            $table->string('concrete_temp')->nullable();
            $table->string('unit_weight')->nullable();

            $table->integer('min_a')->nullable();
            $table->integer('min_b')->nullable();
            $table->integer('min_c')->nullable();
            $table->integer('max_a')->nullable();
            $table->integer('max_b')->nullable();
            $table->integer('max_c')->nullable();
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

            $table->string('cement')->nullable();
            $table->string('other_cementitious_matl')->nullable();
            $table->string('other_cementitious_matl_a')->nullable();
            $table->string('water')->nullable();
            $table->string('fine_aggregate')->nullable();
            $table->string('course_aggregate')->nullable();
            $table->string('max_aggregate_size')->nullable();
            $table->string('admixture_a')->nullable();
            $table->string('admixture_a_a')->nullable();
            $table->string('admixture_b')->nullable();
            $table->string('admixture_b_b')->nullable();
            $table->string('admixture_c')->nullable();
            $table->string('admixture_c_c')->nullable();
            $table->string('total_batch_weight')->nullable();
            
            $table->string('conc_comp_machine_id')->nullable();
            $table->string('caliper_id')->nullable();
            $table->string('scale_id')->nullable();

            $table->string('field')->nullable();
            $table->string('lab')->nullable();
            $table->string('time_cylinders_molded')->nullable();
            $table->string('cylinders_temperature_24h')->nullable();
            $table->string('where_cylinders_cured')->nullable();
            $table->string('field_placement_observations')->nullable();
            $table->string('remark')->nullable();

            $table->string('date_cylinders_received_lab')->nullable();
            $table->string('pick_up_by')->nullable();
            $table->string('cylinders_condition')->nullable();
            $table->string('good')->nullable();
            $table->string('fair')->nullable();
            $table->string('poor')->nullable();
            $table->string('test_hours')->nullable();
            $table->string('pick_up_hours')->nullable();
            $table->string('delayed_hours')->nullable();
            $table->string('why')->nullable();

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
        Schema::dropIfExists('concretes');
    }
}
