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
            $table->string('dni');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento');
            $table->string('edad');
            $table->string('cargo');
            $table->string('correo_electronico');
            $table->string('direccion');
            $table->string('profesion');
            $table->string('colegiatura');
            $table->date('fecha_ingreso');
            $table->date('fecha_baja');
            $table->string('estado_trabajador');
            $table->string('estado_plataforma');
            $table->date('fecha_modificacion');
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
