<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Models\Trabajadore;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trabajadores = Trabajadore::where('estado_trabajador','!=','ELIMINADO')->orderBy('id','DESC')->paginate(10);
        return view('admin.trabajadores.index', compact('trabajadores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trabajadores.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Trabajadore::create([
            'dni_trabajador' => $request->dni_trabajador,
            'nombres_trabajador'=> $request->nombres_trabajador,
            'apellido_paterno_trabajador'=> $request->apellido_paterno_trabajador,
            'apellido_materno_trabajador'=> $request->apellido_materno_trabajador,
            'fecha_nacimiento_trabajador'=> $request->fecha_nacimiento_trabajador,
            'edad_trabajador'=> $request->edad_trabajador,
            'cargo_trabajador'=> $request->cargo_trabajador,
            'correo_electronico_trabajador'=> $request->correo_electronico_trabajador,
            'celular_trabajador'=> $request->celular_trabajador,
            'direccion_trabajador'=> $request->direccion_trabajador,
            'profesion_trabajador'=> $request->profesion_trabajador,
            'colegiatura_trabajador'=> $request->colegiatura_trabajador,
            'fecha_ingreso_trabajador'=> $request->fecha_ingreso_trabajador,
            'fecha_baja_trabajador'=> $request->fecha_baja_trabajador,
            'estado_trabajador'=> $request->estado_trabajador,
            'estado_plataforma_trabajador'=> $request->estado_plataforma_trabajador,
            'fecha_modificacion_trabajador'=> $request->fecha_modificacion_trabajador,
            ]);
        return redirect()->action('App\Http\Controllers\admin\TrabajadorController@index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
