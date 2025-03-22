<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Inicio de Sesión - UTN</title>
</head>

<body>
    @extends('plantilla_header_login')
    @section('contenido')

    <!-- Rectángulo superior -->
    <div class="header">
        <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-header">

        <!-- Menú desplegable con tres rayitas -->
        <div class="menu">
            <div class="menu-icon"></div>
            <div class="menu-icon"></div>
            <div class="menu-icon"></div>
            <div class="submenu">
                <a href="/registro_guardia">GUARDIA</a> <!-- Cambio de ruta -->
                <a href="/configuracion">Configuración</a>
            </div>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="index">
        <div class="logo">
            <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-main">
        </div>

        <!-- Botones de acceso -->
        <div class="contenedor-botones">
            <a class="btn" href="/Inicio_sesion">Iniciar Sesión</a>
            <a class="btn" href="/Registros">Registrarse</a>
        </div>
    </div>

    @endsection
</body>

</html>