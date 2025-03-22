@extends('plantilla_header_login')
@section('contenido')
<div class="login">
    <div class="menu">
        <h3>Alumno</h3>
        <button class="btn-inicio"> <a href="/"> Inicio </a> </button>
    </div>

    <div class="formulario">
        <form  method="POST">
            NOMBRE:  <input type="text" name="nombre" placeholder="Ingrese su nombre"> <br>
            EDAD:  <input type="number" name="nombre" placeholder="Ingrese su edad"> <br>
            CARRO:  <input type="text" name="nombre" placeholder="Ingrese el modelo su carro"> <br>
            COLOR:  <input type="text" name="nombre" placeholder="Ingrese el color del carro"> <br>
            MATRICULA:  <input type="text" name="nombre" placeholder="Ingrese su matricula"> <br>
            MATRICULA_AUTOMOVIL:  <input type="text" name="nombre" placeholder="Ingrese la matricula del vehiculo"> <br>
            CARRERA:  <input type="text" name="nombre" placeholder="Nombre de su carrera"> <br>
            Entrada:  <br>
            salida:

        </form>

    </div>
</div>
@endsection
