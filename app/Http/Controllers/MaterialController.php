<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreMaterial;
use App\Models\Libro;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $libro=Libro::with('material')->get();
//        dd($libro);

        $materiales = Material::where('titulo', 'like', $filtro)
            ->orderBy('titulo')
            ->paginate(50);
        return view('materiales.index', compact('materiales'));
    }

    public function create()
    {
        return view('materiales.create');
    }

    public function store(StoreMaterial $request)
    {
        $valores = $request->all();

        $material = Material::create($valores);
        return redirect()
            ->route('materiales.show', ['materiale' => $material->id])
            ->with('mensaje', 'El material se ha registrado con éxito');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('materiales.show', compact('material'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('materiales.edit', compact('material'));
    }

    public function update(StoreMaterial $request, $id)
    {
        $material = Material::findOrFail($id);

        $material->fill($request->all());
        $material->save();

        return redirect()->route('materiales.show',
            ['materiale' => $material->id]
        )->with('mensaje', 'El material se ha modificado');

    }
}

