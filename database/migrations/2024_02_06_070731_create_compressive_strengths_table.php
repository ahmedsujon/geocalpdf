<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompressiveStrengthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compressive_strengths', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('user_id')->nullable();

            $table->string('contractid')->nullable();
            $table->text('region')->nullable();
            $table->string('contract_id_seq')->nullable();
            $table->text('project_location')->nullable();

            $table->text('concrete_supplier')->nullable();
            $table->string('cdot_mix')->nullable();
            $table->string('item')->nullable();
            $table->text('description')->nullable();

            $table->text('placed_at')->nullable();
            $table->string('material_placed_in_line_item')->nullable();
            $table->string('batch_ticket')->nullable();
            $table->text('field_tester_name')->nullable();
            $table->string('entrained_air')->nullable();
            $table->string('slump')->nullable();
            $table->string('concrete_temperature')->nullable();
            $table->string('unit_weight')->nullable();
            $table->string('yield')->nullable();
            $table->string('wc_ratio')->nullable();

            $table->string('specimen_for')->nullable();
            $table->date('mold_date')->nullable();
            $table->time('time')->nullable();
            $table->string('hours_initial_cure_in_molds')->nullable();
            $table->string('initial_cure_temperature')->nullable();
            $table->string('final_cure_method')->nullable();

            $table->text('location_stored_in_field')->nullable();
            $table->text('manner_of_protection')->nullable();
            $table->text('maintained_moist_and_temperature_by')->nullable();
            $table->dateTime('date_time_molds_removed')->nullable();
            $table->text('field_comments')->nullable();

            $table->string('sample_id')->nullable();
            $table->string('set_no')->nullable();
            $table->string('conc_class')->nullable();
            $table->date('28_day_break_date')->nullable();
            $table->string('number_of_specimens')->nullable();
            $table->string('for_cast_specimens')->nullable();

            $table->date('date_submitted_to_lab')->nullable();
            $table->string('specimens_tested_at')->nullable();
            $table->string('required_strength')->nullable();
            $table->string('28_day_average_compressive_strength')->nullable();
            $table->string('type_of_specimen_submitted')->nullable();
            $table->string('cubes')->nullable();
            $table->string('other')->nullable();
            $table->string('represented_quantity')->nullable();
            $table->string('previous_qty')->nullable();
            $table->string('this_sheet')->nullable();
            $table->string('total_to_date')->nullable();

            $table->text('specimen_a')->nullable();
            $table->date('break_date_a')->nullable();
            $table->text('age_a')->nullable();
            $table->text('diameter_one_a')->nullable();
            $table->text('diameter_two_a')->nullable();
            $table->text('area_a')->nullable();
            $table->text('maximum_load_a')->nullable();
            $table->text('psi_a')->nullable();
            $table->text('break_type_a')->nullable();
            $table->text('aggregate_fractured_a')->nullable();

            $table->text('specimen_b')->nullable();
            $table->date('break_date_b')->nullable();
            $table->text('age_b')->nullable();
            $table->text('diameter_one_b')->nullable();
            $table->text('diameter_two_b')->nullable();
            $table->text('area_b')->nullable();
            $table->text('maximum_load_b')->nullable();
            $table->text('psi_b')->nullable();
            $table->text('break_type_b')->nullable();
            $table->text('aggregate_fractured_b')->nullable();

            $table->text('specimen_c')->nullable();
            $table->date('break_date_c')->nullable();
            $table->text('age_c')->nullable();
            $table->text('diameter_one_c')->nullable();
            $table->text('diameter_two_c')->nullable();
            $table->text('area_c')->nullable();
            $table->text('maximum_load_c')->nullable();
            $table->text('psi_c')->nullable();
            $table->text('break_type_c')->nullable();
            $table->text('aggregate_fractured_c')->nullable();

            $table->text('specimen_d')->nullable();
            $table->date('break_date_d')->nullable();
            $table->text('age_d')->nullable();
            $table->text('diameter_one_d')->nullable();
            $table->text('diameter_two_d')->nullable();
            $table->text('area_d')->nullable();
            $table->text('maximum_load_d')->nullable();
            $table->text('psi_d')->nullable();
            $table->text('break_type_d')->nullable();
            $table->text('aggregate_fractured_d')->nullable();

            $table->text('specimen_e')->nullable();
            $table->date('break_date_e')->nullable();
            $table->text('age_e')->nullable();
            $table->text('diameter_one_e')->nullable();
            $table->text('diameter_two_e')->nullable();
            $table->text('area_e')->nullable();
            $table->text('maximum_load_e')->nullable();
            $table->text('psi_e')->nullable();
            $table->text('break_type_e')->nullable();
            $table->text('aggregate_fractured_e')->nullable();

            $table->text('specimen_f')->nullable();
            $table->date('break_date_f')->nullable();
            $table->text('age_f')->nullable();
            $table->text('diameter_one_f')->nullable();
            $table->text('diameter_two_f')->nullable();
            $table->text('area_f')->nullable();
            $table->text('maximum_load_f')->nullable();
            $table->text('psi_f')->nullable();
            $table->text('break_type_f')->nullable();
            $table->text('aggregate_fractured_f')->nullable();

            $table->text('specimen_g')->nullable();
            $table->date('break_date_g')->nullable();
            $table->text('age_g')->nullable();
            $table->text('diameter_one_g')->nullable();
            $table->text('diameter_two_g')->nullable();
            $table->text('area_g')->nullable();
            $table->text('maximum_load_g')->nullable();
            $table->text('psi_g')->nullable();
            $table->text('break_type_g')->nullable();
            $table->string('aggregate_fractured_g')->nullable();

            $table->longText('lab_comments')->nullable();
            $table->string('submitted_by')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('email')->nullable();
            $table->string('slump_cone_id')->nullable();
            $table->string('thermometer_id')->nullable();
            $table->string('air_meter_id')->nullable();
            $table->string('unit_weight_measure_id')->nullable();
            $table->string('scale_id')->nullable();
            $table->string('status')->nullable();
            $table->string('send_to_client')->default(0);
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
        Schema::dropIfExists('compressive_strengths');
    }
}
