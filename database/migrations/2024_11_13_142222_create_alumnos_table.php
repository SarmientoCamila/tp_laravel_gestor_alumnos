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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->integer('dni');
            $table->boolean('activo');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
