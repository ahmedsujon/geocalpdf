<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldDensityCdotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_density_cdots', function (Blueprint $table) {
            $table->id();
            // Project Information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('geocal_project_num')->nullable();
            $table->string('geocal_project_name')->nullable();
            $table->string('cdot_project_name')->nullable();
            $table->string('date')->nullable();
            $table->string('weather')->nullable();
            $table->string('created_by')->nullable();
            // Gauge Information
            $table->string('office_address')->nullable();
            $table->string('test_method')->nullable();
            $table->string('troxler')->nullable();
            $table->string('other')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('density_std_count')->nullable();
            $table->string('moisture_std_count')->nullable();
            $table->string('moisture_equations')->nullable();
            // COLORADO DEPARTMENT OF TRANSPORTATION													
            $table->string('project_no')->nullable();
            $table->string('region')->nullable();
            $table->string('contract_id')->nullable();
            $table->string('project_location')->nullable();
            $table->string('form_no')->nullable();
            $table->string('grading')->nullable();
            // Table Data
            $table->string('taster_id')->nullable();
            $table->string('sampled_by')->nullable();
            $table->string('company_name')->nullable();
            $table->string('gauge_id')->nullable();
            $table->string('sample_id')->nullable();
            $table->string('test_id')->nullable();
            $table->string('ia_id')->nullable();

            $table->string('test_data_a')->nullable();
            $table->string('test_data_b')->nullable();
            $table->string('test_data_c')->nullable();
            $table->string('test_data_d')->nullable();
            $table->string('test_data_e')->nullable();
            $table->string('test_data_f')->nullable();
            $table->string('test_data_g')->nullable();
            $table->string('test_data_h')->nullable();
            $table->string('test_data_i')->nullable();
            $table->string('test_data_j')->nullable();
            // Sample ID (For IAT)
            $table->string('sample_id_a')->nullable();
            $table->string('sample_id_b')->nullable();
            $table->string('sample_id_c')->nullable();
            $table->string('sample_id_d')->nullable();
            $table->string('sample_id_e')->nullable();
            // Date of Test
            $table->string('test_date_a')->nullable();
            $table->string('test_date_b')->nullable();
            $table->string('test_date_c')->nullable();
            $table->string('test_date_d')->nullable();
            $table->string('test_date_e')->nullable();
            // Standard Count
            $table->text('standard_count_a')->nullable();
            $table->text('standard_count_b')->nullable();
            $table->text('standard_count_c')->nullable();
            $table->text('standard_count_d')->nullable();
            $table->text('standard_count_e')->nullable();
            // Ave. Daily Rice
            $table->text('daily_rice_a')->nullable();
            $table->text('daily_rice_b')->nullable();
            $table->text('daily_rice_c')->nullable();
            $table->text('daily_rice_d')->nullable();
            $table->text('daily_rice_e')->nullable();
            // Station
            $table->text('station_a')->nullable();
            $table->text('station_b')->nullable();
            $table->text('station_c')->nullable();
            $table->text('station_d')->nullable();
            $table->text('station_e')->nullable();
            // Offset
            $table->text('offset_a')->nullable();
            $table->text('offset_b')->nullable();
            $table->text('offset_c')->nullable();
            $table->text('offset_d')->nullable();
            $table->text('offset_e')->nullable();
            // Course/Lift
            $table->text('course_a')->nullable();
            $table->string('course_b')->nullable();
            $table->string('course_c')->nullable();
            $table->string('course_d')->nullable();
            $table->string('course_e')->nullable();

            // Wet Density
            $table->text('wet_density_a_a')->nullable();
            $table->text('wet_density_a_b')->nullable();
            $table->text('wet_density_a_c')->nullable();
            $table->text('wet_density_a_d')->nullable();
            $table->text('wet_density_a_e')->nullable();

            $table->text('wet_density_b_a')->nullable();
            $table->text('wet_density_b_b')->nullable();
            $table->text('wet_density_b_c')->nullable();
            $table->text('wet_density_b_d')->nullable();
            $table->text('wet_density_b_e')->nullable();

            $table->text('wet_density_c_a')->nullable();
            $table->text('wet_density_c_b')->nullable();
            $table->text('wet_density_c_c')->nullable();
            $table->text('wet_density_c_d')->nullable();
            $table->text('wet_density_c_e')->nullable();

            $table->text('wet_density_d_a')->nullable();
            $table->text('wet_density_d_b')->nullable();
            $table->text('wet_density_d_c')->nullable();
            $table->text('wet_density_d_d')->nullable();
            $table->text('wet_density_d_e')->nullable();

            $table->text('wet_densities_a')->nullable();
            $table->text('wet_densities_b')->nullable();
            $table->text('wet_densities_c')->nullable();
            $table->text('wet_densities_d')->nullable();
            $table->text('wet_densities_e')->nullable();
            $table->text('average_wet_density_a')->nullable();
            $table->text('average_wet_density_b')->nullable();
            $table->text('average_wet_density_c')->nullable();
            $table->text('average_wet_density_d')->nullable();
            $table->text('average_wet_density_e')->nullable();
            $table->text('correction_factor_a')->nullable();
            $table->text('correction_factor_b')->nullable();
            $table->text('correction_factor_c')->nullable();
            $table->text('correction_factor_e')->nullable();
            $table->text('correction_factor_d')->nullable();
            $table->text('adjusted_wet_a')->nullable();
            $table->text('adjusted_wet_b')->nullable();
            $table->text('adjusted_wet_c')->nullable();
            $table->text('adjusted_wet_e')->nullable();
            $table->text('adjusted_wet_d')->nullable();
            $table->text('ave_daily_rice_a')->nullable();
            $table->text('ave_daily_rice_b')->nullable();
            $table->text('ave_daily_rice_c')->nullable();
            $table->text('ave_daily_rice_d')->nullable();
            $table->text('ave_daily_rice_e')->nullable();
            $table->text('compaction_a')->nullable();
            $table->text('compaction_b')->nullable();
            $table->text('compaction_c')->nullable();
            $table->text('compaction_d')->nullable();
            $table->text('compaction_e')->nullable();

            $table->string('status')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('field_density_cdots');
    }
}
