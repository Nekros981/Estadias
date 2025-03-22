<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro_trabajador extends Model
{
    use HasFactory;
    protected $fillable = [
        'carro_id',
        'trabajador_id',
    ];
    protected $table = 'carro_trabajador';
    public function carros()
    {
        return $this->belongsTo(carro::class);
    }
    public function trabajadores()
    {
        return $this->belongsTo(trabajador::class);
    }
}
