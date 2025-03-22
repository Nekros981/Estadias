<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro_usuarios_table extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'carro_id',
    ];
    protected $table = 'carro_usuarios_table';
    public function usuarios()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function carros()
    {
        return $this->belongsTo(Carro::class);

        //return $this->belongsToMany(Carro::class, 'carro_usuario', 'usuario_id', 'carro_id');
    }
}
