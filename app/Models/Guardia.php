<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardia extends Model
{
    use HasFactory;
    protected $fillable = [
        'clave_guardia'
    ];
    protected $table = 'guardias';
}
