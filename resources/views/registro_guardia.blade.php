@extends('plantilla_header_login')
@section('contenido')

<link rel="stylesheet" href="{{ asset('/css/login_alumnos.css') }}">

<div class="login">
    <div class="menu">
      
    </div>

    <div class="formulario">
        <form method="create">
            @csrf
            <label>CLAVE:</label> <br>
            <input type="text" name="clave_guardia" placeholder="Ingrese su clave"> <br>
            <br>
            <br>

            <a href="estacionamiento1"class="btn-guardar">entrar</a>
        </form>
    </div>
</div>

@endsection
