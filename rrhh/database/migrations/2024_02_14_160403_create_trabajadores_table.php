<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('dni_trabajador');
            $table->string('nombres_trabajador');
            $table->string('apellido_paterno_trabajador');
            $table->string('apellido_materno_trabajador');
            $table->date('fecha_nacimiento_trabajador');
            $table->string('edad_trabajador');
            $table->string('cargo_trabajador');
            $table->string('correo_electronico_trabajador');
            $table->string('celular_trabajador');
            $table->string('direccion_trabajador');
            $table->string('profesion_trabajador');
            $table->string('colegiatura_trabajador');
            $table->date('fecha_ingreso_trabajador');
            $table->date('fecha_baja_trabajador');
            $table->string('estado_trabajador');
            $table->string('estado_plataforma_trabajador');
            $table->date('fecha_modificacion_trabajador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
