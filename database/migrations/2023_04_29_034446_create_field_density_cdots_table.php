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
