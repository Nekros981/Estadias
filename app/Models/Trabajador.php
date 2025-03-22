<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'clave_trabajador',
        'entrada',
        'salida',
        'fecha',
        'hora',
        'codigo'
    ];
    protected $table = 'trabajadores';

    public function carros()
    {
        return $this->hasMany(Carro::class);
        //Es para idicar una relacion de muchos a muchos
        //pero esta no contiene la clav foranea por eso es hasMany
        // return $this->hasMany(Carro::class, 'carro_usuario', 'usuario_id', 'carro_id');

    }
}
