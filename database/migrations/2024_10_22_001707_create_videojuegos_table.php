<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('genero');
            $table->string('plataforma');
            $table->integer('anio_lanzamiento'); 
            $table->decimal('precio', 8, 2); 
            $table->decimal('calificacion', 3, 1);
            $table->text('descripcion')->nullable(); 
            $table->boolean('multijugador'); 
            $table->string('desarrollador'); 
            $table->string('editor'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
