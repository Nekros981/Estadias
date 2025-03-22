<?php

namespace Database\Seeders;

use App\Models\Trabajador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TrabajadorAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trabajador::create([
            'nombre' => 'Admin',
            'clave_trabajador' => Hash::make('1234'),
        ]);
    }
}
