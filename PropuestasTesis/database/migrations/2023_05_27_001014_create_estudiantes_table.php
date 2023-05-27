<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiantes', function (Blueprint $table) {
            $table->string('Rut', 10)->primary();
            $table->string('Nombre', 20);
            $table->string('Apellido', 20);
            $table->string('Email', 50);
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
        Schema::dropIfExists('Estudiantes');
    }
};
