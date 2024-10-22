<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Videojuego;

class VideojuegoSeeder extends Seeder
{
    public function run(): void
    {
        Videojuego::factory()->count(50)->create(); // Crea 50 registros falsos
    }
}
