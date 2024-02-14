<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $fillable = [
        'dni',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'edad',
        'cargo',
        'correo_electronico',
        'direccion',
        'profesion',
        'colegiatura',
        'fecha_ingreso',
        'fecha_baja',
        'estado_trabajor',
        'estado_plataforma',
        'fecha_modificacion',
    ];
}
