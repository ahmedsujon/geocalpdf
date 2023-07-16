<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMixInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mix_infos', function (Blueprint $table) {
            $table->id();
            $table->string('mix_id')->nullable();
            $table->string('supplier')->nullable();
            $table->string('plant')->nullable();
            $table->string('mix_type')->nullable();
            $table->string('max_theoretical_density')->nullable();
            $table->string('max_theoretical_specificGravity')->nullable();
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
        Schema::dropIfExists('mix_infos');
    }
}
