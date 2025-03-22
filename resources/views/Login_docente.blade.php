@extends('plantilla_header_login') 
@section('contenido')

<link rel="stylesheet" href="{{ asset('/css/login_docentes.css') }}">

<div class="login">
    <div class="menu">
        <button class="btn-docente">Docente</button>
        <button class="btn-inicio"> <a href="/">Inicio</a> </button>
    </div>

    <div class="formulario">
        <form method="POST">
            @csrf
            <label>NOMBRE:</label> <br>
            <input type="text" name="nombre" placeholder="Ingrese su nombre"> <br>

            <label>EDAD:</label> <br>
            <input type="number" name="edad" placeholder="Ingrese su edad"> <br>

            <label>CARRO:</label> <br>
            <input type="text" name="carro" placeholder="Ingrese el modelo de su carro"> <br>

            <label>COLOR:</label> <br>
            <input type="text" name="color" placeholder="Ingrese el color del carro"> <br>

            <label>ID_TRABAJADOR:</label> <br>
            <input type="text" name="id_trabajador" placeholder="Ingrese su clave de trabajador"> <br>

            <label>MATRICULA_AUTOMOVIL:</label> <br>
            <input type="text" name="matricula" placeholder="Ingrese la matrícula del vehículo"> <br>

            <label>CARRERA:</label> <br>
            <input type="text" name="carrera" placeholder="Nombre de su carrera"> <br>

            <label><strong>entrada:</strong> variable_entrada</label> <br>
            <label><strong>salida:</strong> variable_salida</label> <br>
        </form>
    </div>
</div>

@endsection