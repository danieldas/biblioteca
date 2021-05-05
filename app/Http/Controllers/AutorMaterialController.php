<?php


namespace App\Http\Controllers;


use App\Models\Autor;
use App\Models\AutorMaterial;
use Illuminate\Http\Request;


class AutorMaterialController
{
    public function index(Request $request)
    {
        $autores = $this->getAutores($request->material_id);

        return $autores;
    }

    public function store(Request $request)
    {
        $consulta = AutorMaterial::where('autor_id', '=', $request->autor_id)->
                                   where('material_id', '=', $request->material_id)->count();
    if($consulta==0)
    {
        $valores = $request->all();
        AutorMaterial::create($valores);

        $autores = $this->getAutores($request->material_id);

        return response()->json(['res' => true, 'autores' => $autores, 'message' => 'Autor registrado correctamente']);
    }
    else
    {
        return view('usuarios.create');
       
    }
       
    }

    public function destroy($id)
    {
        $autorMaterial = AutorMaterial::find($id);
        $autorMaterial->delete($id);

        $autores = $this->getAutores($autorMaterial->material_id);

        return response()->json(['res' => true, 'autores' => $autores, 'message' => 'Autor eliminado correctamente']);
    }

    private function getAutores($material_id)
    {
        $autores = Autor::
            join('autor_material', 'autor_material.autor_id', '=', 'autor.id')
            ->select('autor_material.id', 'autor.nombre')
            ->where('material_id', $material_id)
            ->get();
        return $autores;
    }
}
