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
            // Sample ID (For IAT)
            $table->string('sample_id_a')->nullable();
            $table->string('sample_id_b')->nullable();
            $table->string('sample_id_c')->nullable();
            // Date of Test
            $table->string('test_date_a')->nullable();
            $table->string('test_date_b')->nullable();
            $table->string('test_date_c')->nullable();
            // Standard Count
            $table->string('standard_count_a')->nullable();
            $table->string('standard_count_b')->nullable();
            $table->string('standard_count_c')->nullable();
            // Ave. Daily Rice
            $table->string('daily_rice_a')->nullable();
            $table->string('daily_rice_b')->nullable();
            $table->string('daily_rice_c')->nullable();
            // Station
            $table->string('station_a')->nullable();
            $table->string('station_b')->nullable();
            $table->string('station_c')->nullable();
            // Offset
            $table->string('offset_a')->nullable();
            $table->string('offset_b')->nullable();
            $table->string('offset_c')->nullable();
            // Course/Lift
            $table->string('course_a')->nullable();
            $table->string('course_b')->nullable();
            $table->string('course_c')->nullable();
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
