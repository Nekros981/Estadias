<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricula',
        'modelo',
        'color',
    ];

    protected $table = 'carros';

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
        //Es para idicar una relacion de muchos a muchos
        //pero esta no contiene la clav foranea por eso es hasMany
        // return $this->hasMany(Carro::class, 'carro_usuario', 'usuario_id', 'carro_id');

    }
    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class);
        //Es para idicar una relacion de muchos a muchos
        // return $this->hasMany(Carro::class, 'carro_usuario', 'usuario_id', 'carro_id');

    }
}
