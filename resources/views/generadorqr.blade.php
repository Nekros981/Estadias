<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/generadorqr.css') }}">
    <title>Registro Vehículo - UTN</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('mostrarqr') }}">
            <h2>Registro de Vehículo</h2>

            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required>

            <button class="btn-generar">Generar QR</button>
        </form>
    </div>
</body>
</html>
