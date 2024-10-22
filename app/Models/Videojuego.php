<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados de forma masiva
    protected $fillable = [
        'nombre',
        'genero',
        'plataforma',
        'anio_lanzamiento',
        'precio',
        'calificacion',
        'descripcion',
        'multijugador',
        'desarrollador',
        'editor',
        'categoria_id' 
    ];

    // Relación con el modelo Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
