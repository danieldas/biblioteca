<?php


namespace App\Http\Controllers;


use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(Request $request)
    {
        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $materias = Materia::where('nombre', 'like', $filtro)
            ->orderBy('nombre')
            ->paginate(50);
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
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

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);

        $materia->fill($request->all());
        $materia->save();

        return redirect()->route('materias.show',
            ['materia' => $materia->id]
        )->with('mensaje', 'la materia se ha modificado');

    }
}

