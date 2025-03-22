@extends('plantilla_header_login')
@section('contenido')

<link rel="stylesheet" href="{{ asset('/css/login_alumnos.css') }}">

<div class="login">
    <div class="menu">
        <button class="btn-inicio"> <a href="/">Inicio</a> </button>
    </div>

    <div class="formulario">
        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <label>NOMBRE:</label> <br>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required> <br>
            @error('nombre')
                <span class="error">{{ $message }}</span> <br>
            @enderror

            <label>EDAD:</label> <br>
            <input type="number" name="edad" placeholder="Ingrese su edad" required> <br>
            @error('edad')
                <span class="error">{{ $message }}</span> <br>
            @enderror

            <label>MATRÍCULA:</label> <br>
            <input type="text" name="matricula" placeholder="Ingrese su matrícula" required> <br>
            @error('matricula')
                <span class="error">{{ $message }}</span> <br>
            @enderror

            <label>CARRERA:</label> <br>
            <input type="text" name="carrera" placeholder="Nombre de su carrera" required> <br>
            @error('carrera')
                <span class="error">{{ $message }}</span> <br>
            @enderror

            <label><strong>entrada:</strong> </label> <br>
            <label><strong>salida:</strong> </label> <br>

            <button type="submit" class="btn-guardar" >Guardar</button>
        </form>
    </div>
</div>

@endsection
