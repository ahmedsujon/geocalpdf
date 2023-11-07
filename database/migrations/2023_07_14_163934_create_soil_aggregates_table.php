<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilAggregatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_aggregates', function (Blueprint $table) {
            $table->id();
            // project information
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('project_number')->nullable();
            $table->string('date')->nullable();
            $table->string('user_id')->nullable();
            $table->string('weather')->nullable();

            $table->string('test_mode')->nullable();
            $table->string('main_test_method')->nullable();
            // gauge information
            $table->string('office_address')->nullable();
            $table->string('troxler')->nullable();
            $table->string('other')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('density_count')->nullable();
            $table->string('moisture_count')->nullable();
            $table->string('moisture_equation')->nullable();
            
            $table->string('compaction_requirement')->nullable();
            $table->string('requirement_plus')->nullable();
            $table->string('requirement_minus')->nullable();
            // general information
            $table->text('general_info')->nullable();
            $table->text('remark')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
            $table->string('send_to_client')->default(0);
            $table->string('responsible_person')->nullable();
            $table->string('observation')->nullable();
            // Proctor Information
            $table->string('proctor_id_a')->nullable();
            $table->text('description_a')->nullable();
            $table->string('test_method_a')->nullable();
            $table->string('max_dry_density_a')->nullable();
            $table->string('optimum_moisture_a')->nullable();

            $table->string('proctor_id_b')->nullable();
            $table->text('description_b')->nullable();
            $table->string('test_method_b')->nullable();
            $table->string('max_dry_density_b')->nullable();
            $table->string('optimum_moisture_b')->nullable();

            $table->string('proctor_id_c')->nullable();
            $table->text('description_c')->nullable();
            $table->string('test_method_c')->nullable();
            $table->string('max_dry_density_c')->nullable();
            $table->string('optimum_moisture_c')->nullable();

            $table->string('proctor_id_d')->nullable();
            $table->text('description_d')->nullable();
            $table->string('test_method_d')->nullable();
            $table->string('max_dry_density_d')->nullable();
            $table->string('optimum_moisture_d')->nullable();

            $table->string('proctor_id_e')->nullable();
            $table->text('description_e')->nullable();
            $table->string('test_method_e')->nullable();
            $table->string('max_dry_density_e')->nullable();
            $table->string('optimum_moisture_e')->nullable();
            // Test Results
            $table->text('test_num_a')->nullable();
            $table->text('result_proctor_id_a')->nullable();
            $table->text('test_dept_a')->nullable();
            $table->text('elev_test_a')->nullable();
            $table->text('wet_density_a')->nullable();
            $table->text('dry_density_a')->nullable();
            $table->text('moisture_content_a')->nullable();
            $table->text('percent_comp_a')->nullable();
            $table->text('comments_a')->nullable();
            $table->text('location_a')->nullable();
            $table->text('material_a')->nullable();

            $table->text('test_num_b')->nullable();
            $table->text('result_proctor_id_b')->nullable();
            $table->text('test_dept_b')->nullable();
            $table->text('elev_test_b')->nullable();
            $table->text('wet_density_b')->nullable();
            $table->text('dry_density_b')->nullable();
            $table->text('moisture_content_b')->nullable();
            $table->text('percent_comp_b')->nullable();
            $table->text('comments_b')->nullable();
            $table->text('location_b')->nullable();
            $table->text('material_b')->nullable();
            
            $table->text('test_num_c')->nullable();
            $table->text('result_proctor_id_c')->nullable();
            $table->text('test_dept_c')->nullable();
            $table->text('elev_test_c')->nullable();
            $table->text('wet_density_c')->nullable();
            $table->text('dry_density_c')->nullable();
            $table->text('moisture_content_c')->nullable();
            $table->text('percent_comp_c')->nullable();
            $table->text('comments_c')->nullable();
            $table->text('location_c')->nullable();
            $table->text('material_c')->nullable();

            $table->text('test_num_d')->nullable();
            $table->text('result_proctor_id_d')->nullable();
            $table->text('test_dept_d')->nullable();
            $table->text('elev_test_d')->nullable();
            $table->text('wet_density_d')->nullable();
            $table->text('dry_density_d')->nullable();
            $table->text('moisture_content_d')->nullable();
            $table->text('percent_comp_d')->nullable();
            $table->text('comments_d')->nullable();
            $table->text('location_d')->nullable();
            $table->text('material_d')->nullable();

            $table->text('test_num_e')->nullable();
            $table->text('result_proctor_id_e')->nullable();
            $table->text('test_dept_e')->nullable();
            $table->text('elev_test_e')->nullable();
            $table->text('wet_density_e')->nullable();
            $table->text('dry_density_e')->nullable();
            $table->text('moisture_content_e')->nullable();
            $table->text('percent_comp_e')->nullable();
            $table->text('comments_e')->nullable();
            $table->text('location_e')->nullable();
            $table->text('material_e')->nullable();

            $table->text('test_num_f')->nullable();
            $table->text('result_proctor_id_f')->nullable();
            $table->text('test_dept_f')->nullable();
            $table->text('elev_test_f')->nullable();
            $table->text('wet_density_f')->nullable();
            $table->text('dry_density_f')->nullable();
            $table->text('moisture_content_f')->nullable();
            $table->text('percent_comp_f')->nullable();
            $table->text('comments_f')->nullable();
            $table->text('location_f')->nullable();
            $table->text('material_f')->nullable();
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
        Schema::dropIfExists('soil_aggregates');
    }
}
