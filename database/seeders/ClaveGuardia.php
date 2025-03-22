<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guardia;
use Illuminate\Support\Facades\Hash;

class ClaveGuardia extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guardia::create([
            'clave_guardia' => Hash::make('1234')
        ]);
    }
}
