<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trabajador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clave_trabajador');
            $table->time('hora_entrada')->nullable();
            $table->time('hora_salida')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('codigo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
