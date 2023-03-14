<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_number')->unique();
            $table->string('name');
            $table->string('location');
            $table->string('avatar')->nullable();
            $table->string('responsible_ft')->default('[]');
            $table->string('responsible_supervisor')->default('[]');
            $table->string('responsible_clerk')->default('[]');
            $table->string('responsible_pe')->default('[]');
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('created_by')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
