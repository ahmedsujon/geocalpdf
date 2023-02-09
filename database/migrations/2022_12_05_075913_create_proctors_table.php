<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proctors', function (Blueprint $table) {
            $table->id();
            $table->string('proctorid')->nullable();
            $table->string('test_method')->nullable();
            $table->string('material_description')->nullable();
            $table->string('max_dry_density')->nullable();
            $table->string('optimum_moisture')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('proctors');
    }
}
