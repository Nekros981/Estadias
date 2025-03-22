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
        Schema::create('carro_usuarios_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('carro_id')->references('id')
                ->on('carros')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('usuario_id')->references('id')
                ->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
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
