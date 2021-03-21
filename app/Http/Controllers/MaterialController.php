<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreMaterial;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\Material;
use App\Models\Materia;
use Illuminate\Http\Request;
use DB;

class MaterialController extends Controller
{

    public function getAutores($material_id)
    {
        $autores=
            Autor::
            join('autor_material', 'autor_material.autor_id', '=', 'autor.id')
            ->select(DB::raw("GROUP_CONCAT(autor.nombre SEPARATOR ', ') as nombres"))
            ->where('material_id', $material_id)
            ->groupBy('material_id')
            ->first();

        if(empty($materias))
           return '';
        else
            return $materias->nombres;
    }
    public function getMaterias($material_id)
    {
        $materias=
            Materia::
            join('materia_material', 'materia_material.materia_id', '=', 'materia.id')
            ->select(DB::raw("GROUP_CONCAT(materia.nombre SEPARATOR ', ') as nombres"))
            ->where('material_id', $material_id)
            ->groupBy('material_id')
            ->first();

        if(empty($materias))
           return '';
        else
            return $materias->nombres;
    }

}

