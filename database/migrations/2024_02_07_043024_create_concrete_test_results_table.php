<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcreteTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concrete_test_results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('project_location')->nullable();
            $table->string('date_submited')->nullable();
            $table->string('region')->nullable();
            $table->string('office_address')->nullable();

            $table->string('item')->nullable();
            $table->string('class_name')->nullable();
            $table->string('design_mix_no')->nullable();
            $table->string('batch_plant')->nullable();
            $table->string('structure')->nullable();
            $table->string('userid')->nullable();
            $table->string('slump')->nullable();
            $table->string('inches_max')->nullable();
            $table->string('inches_min')->nullable();
            $table->string('compressive_strength')->nullable();

            $table->text('location_test_a')->nullable();
            $table->text('date_placed_a')->nullable();
            $table->text('ticket_no_a')->nullable();
            $table->text('batched_a')->nullable();
            $table->text('placed_a')->nullable();
            $table->text('temp_a')->nullable();
            $table->text('slump_a')->nullable();
            $table->text('total_air_a')->nullable();
            $table->text('unit_mass_a')->nullable();
            $table->text('yeild_a')->nullable();
            $table->text('calculated_wc_ratio_a')->nullable();
            $table->text('cylinders_cast_fs_no_a')->nullable();
            $table->text('set_no_a')->nullable();
            $table->text('se_a')->nullable();

            $table->text('location_test_b')->nullable();
            $table->text('date_placed_b')->nullable();
            $table->text('ticket_no_b')->nullable();
            $table->text('batched_b')->nullable();
            $table->text('placed_b')->nullable();
            $table->text('temp_b')->nullable();
            $table->text('slump_b')->nullable();
            $table->text('total_air_b')->nullable();
            $table->text('unit_mass_b')->nullable();
            $table->text('yeild_b')->nullable();
            $table->text('calculated_wc_ratio_b')->nullable();
            $table->text('cylinders_cast_fs_no_b')->nullable();
            $table->text('set_no_b')->nullable();
            $table->text('se_b')->nullable();

            $table->text('location_test_c')->nullable();
            $table->text('date_placed_c')->nullable();
            $table->text('ticket_no_c')->nullable();
            $table->text('batched_c')->nullable();
            $table->text('placed_c')->nullable();
            $table->text('temp_c')->nullable();
            $table->text('slump_c')->nullable();
            $table->text('total_air_c')->nullable();
            $table->text('unit_mass_c')->nullable();
            $table->text('yeild_c')->nullable();
            $table->text('calculated_wc_ratio_c')->nullable();
            $table->text('cylinders_cast_fs_no_c')->nullable();
            $table->text('set_no_c')->nullable();
            $table->text('se_c')->nullable();

            $table->text('location_test_d')->nullable();
            $table->text('date_placed_d')->nullable();
            $table->text('ticket_no_d')->nullable();
            $table->text('batched_d')->nullable();
            $table->text('placed_d')->nullable();
            $table->text('temp_d')->nullable();
            $table->text('slump_d')->nullable();
            $table->text('total_air_d')->nullable();
            $table->text('unit_mass_d')->nullable();
            $table->text('yeild_d')->nullable();
            $table->text('calculated_wc_ratio_d')->nullable();
            $table->text('cylinders_cast_fs_no_d')->nullable();
            $table->text('set_no_d')->nullable();
            $table->text('se_d')->nullable();

            $table->text('location_test_e')->nullable();
            $table->text('date_placed_e')->nullable();
            $table->text('ticket_no_e')->nullable();
            $table->text('batched_e')->nullable();
            $table->text('placed_e')->nullable();
            $table->text('temp_e')->nullable();
            $table->text('slump_e')->nullable();
            $table->text('total_air_e')->nullable();
            $table->text('unit_mass_e')->nullable();
            $table->text('yeild_e')->nullable();
            $table->text('calculated_wc_ratio_e')->nullable();
            $table->text('cylinders_cast_fs_no_e')->nullable();
            $table->text('set_no_e')->nullable();
            $table->text('se_e')->nullable();

            $table->text('location_test_f')->nullable();
            $table->text('date_placed_f')->nullable();
            $table->text('ticket_no_f')->nullable();
            $table->text('batched_f')->nullable();
            $table->text('placed_f')->nullable();
            $table->text('temp_f')->nullable();
            $table->text('slump_f')->nullable();
            $table->text('total_air_f')->nullable();
            $table->text('unit_mass_f')->nullable();
            $table->text('yeild_f')->nullable();
            $table->text('calculated_wc_ratio_f')->nullable();
            $table->text('cylinders_cast_fs_no_f')->nullable();
            $table->text('set_no_f')->nullable();
            $table->text('se_f')->nullable();

            $table->text('location_test_g')->nullable();
            $table->text('date_placed_g')->nullable();
            $table->text('ticket_no_g')->nullable();
            $table->text('batched_g')->nullable();
            $table->text('placed_g')->nullable();
            $table->text('temp_g')->nullable();
            $table->text('slump_g')->nullable();
            $table->text('total_air_g')->nullable();
            $table->text('unit_mass_g')->nullable();
            $table->text('yeild_g')->nullable();
            $table->text('calculated_wc_ratio_g')->nullable();
            $table->text('cylinders_cast_fs_no_g')->nullable();
            $table->text('set_no_g')->nullable();
            $table->text('se_g')->nullable();

            $table->text('location_test_h')->nullable();
            $table->text('date_placed_h')->nullable();
            $table->text('ticket_no_h')->nullable();
            $table->text('batched_h')->nullable();
            $table->text('placed_h')->nullable();
            $table->text('temp_h')->nullable();
            $table->text('slump_h')->nullable();
            $table->text('total_air_h')->nullable();
            $table->text('unit_mass_h')->nullable();
            $table->text('yeild_h')->nullable();
            $table->text('calculated_wc_ratio_h')->nullable();
            $table->text('cylinders_cast_fs_no_h')->nullable();
            $table->text('set_no_h')->nullable();
            $table->text('se_h')->nullable();

            $table->text('location_test_i')->nullable();
            $table->text('date_placed_i')->nullable();
            $table->text('ticket_no_i')->nullable();
            $table->text('batched_i')->nullable();
            $table->text('placed_i')->nullable();
            $table->text('temp_i')->nullable();
            $table->text('slump_i')->nullable();
            $table->text('total_air_i')->nullable();
            $table->text('unit_mass_i')->nullable();
            $table->text('yeild_i')->nullable();
            $table->text('calculated_wc_ratio_i')->nullable();
            $table->text('cylinders_cast_fs_no_i')->nullable();
            $table->text('set_no_i')->nullable();
            $table->text('se_i')->nullable();

            $table->text('location_test_j')->nullable();
            $table->text('date_placed_j')->nullable();
            $table->text('ticket_no_j')->nullable();
            $table->text('batched_j')->nullable();
            $table->text('placed_j')->nullable();
            $table->text('temp_j')->nullable();
            $table->text('slump_j')->nullable();
            $table->text('total_air_j')->nullable();
            $table->text('unit_mass_j')->nullable();
            $table->text('yeild_j')->nullable();
            $table->text('calculated_wc_ratio_j')->nullable();
            $table->text('cylinders_cast_fs_no_j')->nullable();
            $table->text('set_no_j')->nullable();
            $table->text('se_j')->nullable();

            $table->text('location_test_k')->nullable();
            $table->text('date_placed_k')->nullable();
            $table->text('ticket_no_k')->nullable();
            $table->text('batched_k')->nullable();
            $table->text('placed_k')->nullable();
            $table->text('temp_k')->nullable();
            $table->text('slump_k')->nullable();
            $table->text('total_air_k')->nullable();
            $table->text('unit_mass_k')->nullable();
            $table->text('yeild_k')->nullable();
            $table->text('calculated_wc_ratio_k')->nullable();
            $table->text('cylinders_cast_fs_no_k')->nullable();
            $table->text('set_no_k')->nullable();
            $table->text('se_k')->nullable();

            $table->text('location_test_l')->nullable();
            $table->text('date_placed_l')->nullable();
            $table->text('ticket_no_l')->nullable();
            $table->text('batched_l')->nullable();
            $table->text('placed_l')->nullable();
            $table->text('temp_l')->nullable();
            $table->text('slump_l')->nullable();
            $table->text('total_air_l')->nullable();
            $table->text('unit_mass_l')->nullable();
            $table->text('yeild_l')->nullable();
            $table->text('calculated_wc_ratio_l')->nullable();
            $table->text('cylinders_cast_fs_no_l')->nullable();
            $table->text('set_no_l')->nullable();
            $table->text('se_l')->nullable();

            $table->text('location_test_m')->nullable();
            $table->text('date_placed_m')->nullable();
            $table->text('ticket_no_m')->nullable();
            $table->text('batched_m')->nullable();
            $table->text('placed_m')->nullable();
            $table->text('temp_m')->nullable();
            $table->text('slump_m')->nullable();
            $table->text('total_air_m')->nullable();
            $table->text('unit_mass_m')->nullable();
            $table->text('yeild_m')->nullable();
            $table->text('calculated_wc_ratio_m')->nullable();
            $table->text('cylinders_cast_fs_no_m')->nullable();
            $table->text('set_no_m')->nullable();
            $table->text('se_m')->nullable();

            $table->text('location_test_n')->nullable();
            $table->text('date_placed_n')->nullable();
            $table->text('ticket_no_n')->nullable();
            $table->text('batched_n')->nullable();
            $table->text('placed_n')->nullable();
            $table->text('temp_n')->nullable();
            $table->text('slump_n')->nullable();
            $table->text('total_air_n')->nullable();
            $table->text('unit_mass_n')->nullable();
            $table->text('yeild_n')->nullable();
            $table->text('calculated_wc_ratio_n')->nullable();
            $table->text('cylinders_cast_fs_no_n')->nullable();
            $table->text('set_no_n')->nullable();
            $table->text('se_n')->nullable();

            $table->text('location_test_o')->nullable();
            $table->text('date_placed_o')->nullable();
            $table->text('ticket_no_o')->nullable();
            $table->text('batched_o')->nullable();
            $table->text('placed_o')->nullable();
            $table->text('temp_o')->nullable();
            $table->text('slump_o')->nullable();
            $table->text('total_air_o')->nullable();
            $table->text('unit_mass_o')->nullable();
            $table->text('yeild_o')->nullable();
            $table->text('calculated_wc_ratio_o')->nullable();
            $table->text('cylinders_cast_fs_no_o')->nullable();
            $table->text('set_no_o')->nullable();
            $table->text('se_o')->nullable();

            $table->string('tester')->nullable();
            $table->string('tester_title')->nullable();
            $table->string('project_engineer')->nullable();
            $table->string('signature')->nullable();
            $table->string('title')->nullable();

            $table->string('remark')->nullable();
            $table->string('status')->nullable();
            $table->string('publish_status')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('concrete_test_results');
    }
}
