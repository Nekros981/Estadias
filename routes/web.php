<?php

use Illuminate\Support\Facades\Route;

/*
|_-------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Inicio_sesion', function () {
    return view('inicio_sesion');
})->name('inicio_sesion');

Route::get('/Login_Alumnos', function () {
    return view('login_alumno');
});
// Ruta para mostrar el formulario de alta de usuarios
Route::get('/usuarios/create', 'App\Http\Controllers\usuarioController@create')->name('usuarios.create');

// Ruta para procesar el formulario y guardar el usuario
Route::post('/usuarios', 'App\Http\Controllers\usuarioController@store')->name('usuarios.store');

Route::get('/Login_Docente', function () {
    return view('login_docente');
});



Route::get('/Estacionamiento1', function () {
    return view('estacionamiento1');
});

Route::get('/Estacionamiento2', function () {
    return view('estacionamiento2');
});

Route::get('/Estacionamiento3', function () {
    return view('estacionamiento3');
});

Route::get('/Estacionamiento4', function () {
    return view('estacionamiento4');
});

Route::get('/Visitantes', function () {
    return view('visitantes');
});

route::get('/Registros', function () {
    return view('registros');
});

Route::get('/MostrarQr', 'App\Http\Controllers\Qrcontroller@generate')->name('mostrarqr');

route::get('/Generadorqr', function () {
    return view('generadorqr');
})->name('generadorqr');

Route::get('/Generadorqr', 'App\Http\Controllers\Qrcontroller@generate')->name('generadorqr');

Route::get('/registro_guardia', function () {
    return view('registro_guardia');
})->name('registro_guardia');
