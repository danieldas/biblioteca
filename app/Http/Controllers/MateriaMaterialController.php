<?php


namespace App\Http\Controllers;


use App\Models\Materia;
use App\Models\MateriaMaterial;
use Illuminate\Http\Request;


class MateriaMaterialController
{
    public function index(Request $request)
    {
        $materias = $this->getMaterias($request->material_id);

        return $materias;
    }

    public function store(Request $request)
    {
        $valores = $request->all();
        MateriaMaterial::create($valores);

        $materias = $this->getMaterias($request->material_id);

        return response()->json(['res' => true, 'materias' => $materias, 'message' => 'Materia registrado correctamente']);
    }

    public function destroy($id)
    {
        $materiaMaterial = MateriaMaterial::find($id);
        $materiaMaterial->delete($id);

        $materias = $this->getMaterias($materiaMaterial->material_id);

        return response()->json(['res' => true, 'materias' => $materias, 'message' => 'Materia eliminado correctamente']);
    }

    private function getMaterias($material_id)
    {
        $materias = Materia::
        join('materia_material', 'materia_material.materia_id', '=', 'materia.id')
            ->select('materia_material.id', 'materia.nombre','materia.sigla')
            ->where('material_id', $material_id)
            ->get();
        return $materias;
    }
}
