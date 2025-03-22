<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio_sesion.css') }}">
</head>
<body>
    <!-- Rectángulo superior -->
    <div class="header">
        <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-header">
    </div>

    <!-- Contenedor principal -->
    <div class="index">
        <div class="logo">
            <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-main">
        </div>

        <!-- Formulario de inicio de sesión -->
        <form class="formulario-login">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required>

            <!-- Botón "Ingresar" como enlace -->
            <a href="{{ route('generadorqr') }}" class="btn-ingresar">Ingresar</a>
        </form>
    </div>
</body>
</html>
