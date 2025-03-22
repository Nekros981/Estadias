<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Vista para el formulario de alta
        return view('usuarios.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // Validación
        $request->validate([
            'nombre' => 'required|string|max:150',
            'edad' => 'required|string',
            'matricula' => 'required|string|max:10|unique:usuarios',
            'carrera' => 'required|string',
            'hora_entrada' => 'nullable|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i|after:hora_entrada',
            'fecha' => 'nullable|date',
            'hora' => 'nullable|date_format:H:i',
            'codigo' => 'nullable|string'
        ]);

        // Obtener datos del request
        $data = $request->all();

        // Asignar valores por defecto
        $data['hora_entrada'] = $data['hora_entrada'] ?? '00:00:00';
        $data['hora_salida'] = $data['hora_salida'] ?? date('H:i:s', strtotime($data['hora_entrada']) + 8 * 3600);
        $data['fecha'] = $data['fecha'] ?? now()->toDateString();
        $data['hora'] = $data['hora'] ?? now()->toTimeString();
        $data['codigo'] = $data['codigo'] ?? Str::random(10);

        // Guardar en la base de datos
        Usuario::create($data);

        return redirect()->route('inicio_sesion')
            ->with('success', 'Usuario creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
