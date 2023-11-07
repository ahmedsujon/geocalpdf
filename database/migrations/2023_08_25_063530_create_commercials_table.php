<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->id();
            // project information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('date')->nullable();
            $table->string('user_id')->nullable();
            $table->string('weather')->nullable();
            $table->string('test_mode')->nullable();
            $table->string('test_method')->nullable();

            // gauge information
            $table->string('office_address')->nullable();
            $table->string('troxler')->nullable();
            $table->string('other')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('density_count')->nullable();
            $table->string('moisture_count')->nullable();
            $table->string('moisture_equation')->nullable();

            $table->string('compaction_requirement_min')->nullable();
            $table->string('compaction_requirement_max')->nullable();

            // mix information
            $table->string('mix_a_id')->nullable();
            $table->text('supplier_a')->nullable();
            $table->string('plant_a')->nullable();
            $table->text('mix_type_a')->nullable();
            $table->text('max_theoretical_density_a')->nullable();
            $table->text('max_theoretical_specific_gravity_a')->nullable();

            $table->string('mix_b_id')->nullable();
            $table->text('supplier_b')->nullable();
            $table->string('plant_b')->nullable();
            $table->text('mix_type_b')->nullable();
            $table->text('max_theoretical_density_b')->nullable();
            $table->text('max_theoretical_specific_gravity_b')->nullable();

            $table->string('mix_c_id')->nullable();
            $table->text('supplier_c')->nullable();
            $table->string('plant_c')->nullable();
            $table->text('mix_type_c')->nullable();
            $table->text('max_theoretical_density_c')->nullable();
            $table->text('max_theoretical_specific_gravity_c')->nullable();

            $table->string('mix_d_id')->nullable();
            $table->text('supplier_d')->nullable();
            $table->string('plant_d')->nullable();
            $table->text('mix_type_d')->nullable();
            $table->text('max_theoretical_density_d')->nullable();
            $table->text('max_theoretical_specific_gravity_d')->nullable();

            $table->string('mix_e_id')->nullable();
            $table->text('supplier_e')->nullable();
            $table->string('plant_e')->nullable();
            $table->text('mix_type_e')->nullable();
            $table->text('max_theoretical_density_e')->nullable();
            $table->text('max_theoretical_specific_gravity_e')->nullable();

            // Test result
            $table->integer('test_no_a')->nullable();
            $table->string('result_mix_id_a')->nullable();
            $table->text('count_period_a')->nullable();
            $table->text('material_a')->nullable();
            $table->text('lift_a')->nullable();
            $table->text('layer_thickness_a')->nullable();
            $table->string('max_theory_density_a')->nullable();
            $table->string('field_wet_density_a')->nullable();
            $table->string('relative_compaction_a')->nullable();
            $table->text('pass_fail_a')->nullable();
            $table->text('location_a')->nullable();

            $table->integer('test_no_b')->nullable();
            $table->string('result_mix_id_b')->nullable();
            $table->text('count_period_b')->nullable();
            $table->text('material_b')->nullable();
            $table->text('lift_b')->nullable();
            $table->text('layer_thickness_b')->nullable();
            $table->string('max_theory_density_b')->nullable();
            $table->string('field_wet_density_b')->nullable();
            $table->string('relative_compaction_b')->nullable();
            $table->text('pass_fail_b')->nullable();
            $table->text('location_b')->nullable();

            $table->integer('test_no_c')->nullable();
            $table->string('result_mix_id_c')->nullable();
            $table->text('count_period_c')->nullable();
            $table->text('material_c')->nullable();
            $table->text('lift_c')->nullable();
            $table->text('layer_thickness_c')->nullable();
            $table->string('max_theory_density_c')->nullable();
            $table->string('field_wet_density_c')->nullable();
            $table->string('relative_compaction_c')->nullable();
            $table->text('pass_fail_c')->nullable();
            $table->text('location_c')->nullable();

            $table->integer('test_no_d')->nullable();
            $table->string('result_mix_id_d')->nullable();
            $table->text('count_period_d')->nullable();
            $table->text('material_d')->nullable();
            $table->text('lift_d')->nullable();
            $table->text('layer_thickness_d')->nullable();
            $table->string('max_theory_density_d')->nullable();
            $table->string('field_wet_density_d')->nullable();
            $table->string('relative_compaction_d')->nullable();
            $table->text('pass_fail_d')->nullable();
            $table->text('location_d')->nullable();

            $table->integer('test_no_e')->nullable();
            $table->string('result_mix_id_e')->nullable();
            $table->text('count_period_e')->nullable();
            $table->text('material_e')->nullable();
            $table->text('lift_e')->nullable();
            $table->text('layer_thickness_e')->nullable();
            $table->string('max_theory_density_e')->nullable();
            $table->string('field_wet_density_e')->nullable();
            $table->string('relative_compaction_e')->nullable();
            $table->text('pass_fail_e')->nullable();
            $table->text('location_e')->nullable();

            $table->integer('test_no_f')->nullable();
            $table->string('result_mix_id_f')->nullable();
            $table->text('count_period_f')->nullable();
            $table->text('material_f')->nullable();
            $table->text('lift_f')->nullable();
            $table->text('layer_thickness_f')->nullable();
            $table->string('max_theory_density_f')->nullable();
            $table->string('field_wet_density_f')->nullable();
            $table->string('relative_compaction_f')->nullable();
            $table->text('pass_fail_f')->nullable();
            $table->text('location_f')->nullable();

            // general information
            $table->text('general_location')->nullable();
            $table->text('remark')->nullable();
            $table->text('report_status')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
            $table->string('send_to_client')->default(0);
            $table->string('responsible_person')->nullable();
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
        Schema::dropIfExists('commercials');
    }
}
