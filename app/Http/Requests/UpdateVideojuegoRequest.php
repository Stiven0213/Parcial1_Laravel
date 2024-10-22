<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideojuegoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
            'anio_lanzamiento' => 'required|integer',
            'precio' => 'required|numeric',
            'calificacion' => 'required|numeric|min:1|max:5',
            'descripcion' => 'nullable|string',
            'multijugador' => 'required|boolean',
            'desarrollador' => 'required|string|max:255',
            'editor' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id', // Validar que la categoría exista
        ];
    }
}
