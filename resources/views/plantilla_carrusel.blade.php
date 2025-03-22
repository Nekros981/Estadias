<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo con Carrusel Automático</title>
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Altura completa de la ventana */
            overflow: hidden; /* Oculta el desbordamiento */
        }

        /* Contenedor del carrusel (fondo) */
        #carrusel-fondo {
            position: fixed; /* Fijo para que sea el fondo */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Lo coloca detrás de todo */
        }

        /* Contenedor de slides */
        #carrusel-slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 1s ease; /* Transición suave */
        }

        /* Estilos para cada slide */
        .slide {
            min-width: 100%;
            height: 100%;
            background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
            background-position: center; /* Centra la imagen */
        }
    </style>
</head>
<body>
    <!-- Contenedor del carrusel (fondo) -->
    <div id="carrusel-fondo">
        <!-- Contenedor de slides -->
        <div id="carrusel-slides">
            <!-- Slides con imágenes de fondo -->
            <div class="slide" style="background-image: url('imagenes/slide/imagen1.jpg');"></div>
            <div class="slide" style="background-image: url('imagenes/slide/imagen2.jpg');"></div>
            <div class="slide" style="background-image: url('imagenes/slide/imagen3.jpg');"></div>
               <div class="slide" style="background-image: url('imagenes/slide/C:\laragon\www\Estacionamiento\public\imagenes\slide\siguen-conflictos-en-la-ut-peligra-inicio-de-clases-297579.jpg');"></div>
                 <div class="slide" style="background-image: url('imagenes/slide/C:\laragon\www\Estacionamiento\public\imagenes\slide\ut-amplia-periodo-de-inscripcion-63405.jpg');"></div>
                 <div class="slide" style="background-image: url('imagenes/slide/C:\laragon\www\Estacionamiento\public\imagenes\slide\ut-nayarit-amplio-el-periodo-de-inscripciones-176974.jpg');"></div>
        </div>
    </div>

    <!-- Script para el carrusel automático -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carruselSlides = document.getElementById('carrusel-slides');
            const slides = document.querySelectorAll('.slide');
            let currentIndex = 0;

            // Función para mover el carrusel
            function moveToSlide(index) {
                if (index < 0) {
                    index = slides.length - 1; // Vuelve al último slide si es menor que 0
                } else if (index >= slides.length) {
                    index = 0; // Vuelve al primer slide si es mayor que el total
                }
                const offset = -index * 100;
                carruselSlides.style.transform = `translateX(${offset}%)`;
                currentIndex = index;
            }

            // Cambiar de slide automáticamente cada 5 segundos
            setInterval(function () {
                moveToSlide(currentIndex + 1);
            }, 5000); // 5000 milisegundos = 5 segundos
        });
    </script>
</body>
</html>