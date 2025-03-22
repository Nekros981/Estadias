<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Registro - UTN</title>
</head>

<body>
    @extends('plantilla_header_login')
    @section('contenido')

    <!-- Rectángulo superior -->
    <div class="header">
        <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-header">

    </div>

    <!-- Contenedor principal -->
    <div class="index">
        <div class="logo">
            <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-main">
        </div>

        <!-- Botones de acceso -->
        <div class="contenedor-botones">
            <a class="btn" href="/Login_Alumnos">Alumno</a>
            <a class="btn" href="/Login_Docente">Trabajador_UT</a>
            <a class="btn" href="/Visitantes">Invitado</a>
        </div>
    </div>

    @endsection
</body>

</html>
