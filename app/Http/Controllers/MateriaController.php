<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreMateria;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(Request $request)
    {
        $alta = $request->alta;
        if ($alta == null) {
            $alta = true;
        }
        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $materias = Materia::where([['nombre', 'like', $filtro], ['alta', $alta]])
            ->orWhere([['sigla', 'like', $filtro], ['alta', $alta]])
            ->orderBy('nombre')
            ->paginate(50);
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(StoreMateria $request)
    {
        $valores = $request->all();

        $materia = Materia::create($valores);
       return redirect()
            ->route('materias.show', ['materia' => $materia->id])
            ->with('mensaje', 'la materia se ha registrado con éxito');
    }

    public function show($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.show', compact('materia'));
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    public function update(StoreMateria $request, $id)
    {
        $materia = Materia::findOrFail($id);

        $materia->fill($request->all());
        $materia->save();

        return redirect()->route('materias.show',
            ['materia' => $materia->id]
        )->with('mensaje', 'la materia se ha modificado');
    }

    public function cambiarEstado($id, $estado)
    {
        $materia = Materia::findOrFail($id);
        $materia->update(array('alta' => $estado));
        $materia->save();
        if ($estado) {
            return redirect()->route('materias.index')
                ->with('mensaje', 'La materia ha sido dado de alta');
        } else {
            return redirect()->route('materias.index')
                ->with('mensajeRojo', 'La materia ha sido dado de baja');
        }
    }
}


