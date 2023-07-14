<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcreteDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concrete_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('concrete_id')->unsigned()->nullable();
            $table->string('age')->nullable();
            $table->string('test_date')->nullable();
            $table->string('diameter')->nullable();
            $table->string('diameter_a')->nullable();
            $table->string('avg_length')->nullable();
            $table->string('mass')->nullable();
            $table->string('max_load')->nullable();
            $table->string('type_cap')->nullable();
            $table->string('area_cyl')->nullable();
            $table->string('measured_strength')->nullable();
            $table->string('specified_strength')->nullable();
            $table->string('type_fracture')->nullable();
            $table->string('person_performing')->nullable();
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
        Schema::dropIfExists('concrete_data');
    }
}
