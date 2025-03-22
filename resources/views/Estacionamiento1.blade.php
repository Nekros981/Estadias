<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/estacionamiento_01.css">
    <title>Estacionamiento CMD</title>
</head>
<body>
    <!-- Encabezado con logo de la UTN y borde negro -->
    <div class="header">
        <img src="{{ asset('imagenes/UTN.png') }}" alt="Logo de la UTN" class="logo-header">
        <p class="texto-encabezado">Estacionamiento</p>
        <p class="texto-encabezado">CMD</p>
    </div>

    <!-- Contenedor principal -->
    <div class="contenedor-principal">
        <!-- Recuadros verdes (estacionamientos) -->
        <div class="estacionamientos-container">
            <!-- Generamos 106 recuadros verdes -->
            <?php for ($i = 1; $i <= 106; $i++): ?>
                <div class="btn-estacionamiento">
                    <button class="recuadro-verde" data-id="<?php echo $i; ?>" data-estado="verde">&nbsp;</button>
                    <div class="num-estacionamiento"><?php echo $i; ?></div>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Información del usuario y botones (recuadro más pequeño) -->
        <div class="datos-usuario">
            <p><strong>Nombre:</strong> <span id="nombre-usuario">Cargando...</span></p>
            <p><strong>Matrícula:</strong> <span id="matricula-usuario">Cargando...</span></p>
            <p><strong>Carro:</strong> <span id="carro-usuario">Cargando...</span></p>
            <p><strong>Color:</strong> <span id="color-usuario">Cargando...</span></p>
            <p><strong>salida:</strong> <span id="salida-usuario">Cargando...</span></p>
            <p><strong>entrada:</strong> <span id="entrada-usuario">Cargando...</span></p>

            <!-- Botones de navegación -->
            <div class="botones-navegacion">
                <button class="btn-nav"><a href="/Estacionamiento2">Estacionamiento 2</a></button>
                <button class="btn-nav"><a href="/Estacionamiento3">Estacionamiento 3</a></button>
                <button class="btn-nav"><a href="/Estacionamiento4">Estacionamiento 4</a></button>
            </div>

            <!-- Botón Recargar -->
            <button id="btn-recargar" class="btn-recargar">Recargar</button>
        </div>
    </div>

    <!-- Script para interactuar con los recuadros y la base de datos -->
    <script>
        // Función para cambiar el color del recuadro y enviar datos a la base de datos
        document.querySelectorAll('.recuadro-verde').forEach(recuadro => {
            recuadro.addEventListener('click', function() {
                const idRecuadro = this.getAttribute('data-id');
                const estadoActual = this.getAttribute('data-estado');

                if (estadoActual === "verde") {
                    // Cambiar a rojo (entrada)
                    this.style.backgroundColor = 'red';
                    this.setAttribute('data-estado', 'rojo');
                    console.log(`Recuadro ${idRecuadro}: Entrada (ocupado). Enviando a la base de datos...`);
                } else {
                    // Cambiar a verde (salida)
                    this.style.backgroundColor = 'green';
                    this.setAttribute('data-estado', 'verde');
                    console.log(`Recuadro ${idRecuadro}: Salida (disponible). Enviando a la base de datos...`);
                }
            });
        });

        // Función para recargar los datos del usuario
        document.getElementById('btn-recargar').addEventListener('click', function() {
            // Simulación de datos desde la base de datos
            const datosUsuario = {
                nombre: "Caritos Ortega Jiménez",
                matricula: "TIC-200166",
                carro: "Nissan GRR 734",
                color: "Gris"
            };

            // Actualizar la información del usuario
            document.getElementById('nombre-usuario').textContent = datosUsuario.nombre;
            document.getElementById('matricula-usuario').textContent = datosUsuario.matricula;
            document.getElementById('carro-usuario').textContent = datosUsuario.carro;
            document.getElementById('color-usuario').textContent = datosUsuario.color;
        });
    </script>
</body>
</html>
