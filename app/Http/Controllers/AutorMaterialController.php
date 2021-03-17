<?php


namespace App\Http\Controllers;


use App\Models\Autor;
use App\Models\AutorMaterial;
use Illuminate\Http\Request;


class AutorMaterialController
{
    public function index(Request $request)
    {

        $autores = Autor::
        join('autor_material', 'autor_material.autor_id', '=', 'autor.id')
            ->where('material_id', $request->material_id)
            ->get();
        return $autores;
    }
    public function store(Request $request)
    {
        $valores = $request->all();
        AutorMaterial::create($valores);

        $autores = Autor::
            join('autor_material', 'autor_material.autor_id', '=', 'autor.id')
            ->where('material_id', $request->material_id)
            ->get();
        return response()->json(['res' => true, 'autores' => $autores, 'message' => 'Autor registrado correctamente']);

    }
}
