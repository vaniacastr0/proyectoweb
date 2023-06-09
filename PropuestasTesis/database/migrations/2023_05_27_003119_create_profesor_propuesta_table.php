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
    public function up(): void
    {
        Schema::create('Profesor_Propuesta', function (Blueprint $table) {
            //crear la clave compuesta
            $table->integer('Propuesta_Id');
            $table->integer('Profesor_Id');
            $table->primary(['Propuesta_Id','Profesor_Id']);

            //crear los demás campos de la tabla de intersección
            $table->date('Fecha');
            $table->time('Hora');
            $table->text('Comentario');

            //referenciar a propuestas y profesores
            $table->foreign('Propuesta_Id')->references('Id')->on('Propuestas');
            $table->foreign('Profesor_Id')->references('Id')->on('Profesores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profesor_Propuesta');
    }
};
