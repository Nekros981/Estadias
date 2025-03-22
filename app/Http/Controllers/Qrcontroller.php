<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Usuario;
use App\Models\Carro;
use Illuminate\Http\Request;

class Qrcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('generadorqr');
    }

    public function generate(Usuario $usuario, Carro $carro)
    {

        // Convertimos los datos en formato JSON
        $datosQR = json_encode([
            'usuario' => $usuario,
            'carro' => $carro
        ]);

        // Generamos el código QR
        $qrCode = base64_encode(QrCode::format('png')->size(300)->generate('http://localhost:3306/'));

        return view('mostrarqr', compact('qrCode'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
