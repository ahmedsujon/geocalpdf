<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_test_results', function (Blueprint $table) {
            $table->id();
            // test results information
            $table->bigInteger('file_id')->unsigned();
            $table->string('test_num')->nullable();
            $table->string('location')->nullable();
            $table->string('result_proctor_id')->nullable();
            $table->string('test_dept')->nullable();
            $table->string('elev_test')->nullable();
            $table->string('wet_density')->nullable();
            $table->string('dry_density')->nullable();
            $table->string('moisture_content')->nullable();
            $table->string('percent_comp')->nullable();
            $table->string('material')->nullable();
            $table->string('comments')->nullable();

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
        Schema::dropIfExists('file_test_results');
    }
}
