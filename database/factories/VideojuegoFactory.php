<?php

namespace Database\Factories;

use App\Models\Videojuego;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideojuegoFactory extends Factory
{
    protected $model = Videojuego::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'genero' => $this->faker->randomElement(['Acción', 'Aventura', 'Deportes']),
            'plataforma' => $this->faker->randomElement(['PS5', 'Xbox Series X', 'PC']),
            'anio_lanzamiento' => $this->faker->year(),
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'calificacion' => $this->faker->randomFloat(1, 1, 5),
            'descripcion' => $this->faker->paragraph(),
            'multijugador' => $this->faker->boolean(),
            'desarrollador' => $this->faker->company(),
            'editor' => $this->faker->company(),
            'categoria_id' => Categoria::factory(),
        ];
    }
}
