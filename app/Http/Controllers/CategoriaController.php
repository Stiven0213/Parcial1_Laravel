<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(StoreCategoriaRequest $request)
    {
        return Categoria::create($request->validated());
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return $categoria;
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->noContent();
    }
}
