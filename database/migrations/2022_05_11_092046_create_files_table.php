<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
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
            $table->string('requirment_plus')->nullable();
            $table->string('requirment_minus')->nullable();
            // general information
            $table->text('general_info')->nullable();

            $table->text('remark')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('files');
    }
}
