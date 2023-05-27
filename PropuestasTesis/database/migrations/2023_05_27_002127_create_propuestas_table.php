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
        Schema::create('Propuestas', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->date('Fecha');
            $table->string('Documento', 100);
            $table->tinyInteger('Estado');
            $table->string('Estudiante_rut', 10);
            $table->timestamps();

            $table->foreign('Estudiante_rut')->references('Rut')->on('Estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Propuestas');
    }
};
