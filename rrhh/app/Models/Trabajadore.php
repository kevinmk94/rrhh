<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadore extends Model
{
    protected $fillable = [
        'dni_trabajador',
        'nombres_trabajador',
        'apellido_paterno_trabajador',
        'apellido_materno_trabajador',
        'fecha_nacimiento_trabajador',
        'edad_trabajador',
        'cargo_trabajador',
        'correo_electronico_trabajador',
        'celular_trabajador',
        'direccion_trabajador',
        'profesion_trabajador',
        'colegiatura_trabajador',
        'fecha_ingreso_trabajador',
        'fecha_baja_trabajador',
        'estado_trabajador',
        'estado_plataforma_trabajador',
        'fecha_modificacion_trabajador',
    ];
}
