<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        return Videojuego::all();
    }

    public function store(Request $request)
    {
        // Validar los datos que llegan del request
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'genero' => 'required|string',
            'anio_lanzamiento' => 'required|integer',
            'precio' => 'required|numeric',
            'plataforma' => 'required|string|max:255',
            'calificacion' => 'required|numeric|min:1|max:5',
            'multijugador' => 'required|boolean',
            'desarrollador' => 'required|string|max:255',
            'editor' => 'required|string|max:255',  // Asegúrate de incluir esto
            'categoria_id' => 'required|exists:categorias,id',
        ]);
           
        // Crear el nuevo videojuego usando el método create
        $videojuego = Videojuego::create($validatedData);

        return response()->json(['message' => 'Videojuego creado correctamente', 'videojuego' => $videojuego], 201);
    }
    
    public function show(Videojuego $videojuego)
    {
        return $videojuego->load('categoria'); // Incluye la categoría relacionada
    }
    
    public function update(Request $request, Videojuego $videojuego)
    {
        $validated = $request->validate([
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
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $videojuego->update($validated);

        return response()->json(['message' => 'Videojuego actualizado correctamente', 'videojuego' => $videojuego]);
    }

    public function destroy(Videojuego $videojuego)
    {
        $videojuego->delete();

        return response()->noContent();
    }
}
