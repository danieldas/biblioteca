<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreTesis;
use App\Models\Material;
use App\Models\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
    public function index(Request $request)
    {

        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $tesis = Tesis::
//        where('titulo', 'like', $filtro)
        Where('tutor', 'like', $filtro)
        ->orWhereHas('material', function ($query) use ($filtro) {
            $query->where('tutor', 'like', $filtro)
            ->orWhere('titulo', 'like', $filtro);
        })
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('tesis.index', compact('tesis'));
    }

    public function create()
    {
        return view('tesis.create');
    }

    public function store(StoreTesis $request)
    {
        $valores = $request->all();

        $material=Material::create($valores);
        $valores['material_id']= $material->id;
        $tesis = Tesis::create($valores);
        return redirect()
            ->route('tesis.edit', ['tesi' => $tesis->id])
            ->with('mensaje', 'La tesis se ha creado con éxito');
    }
    public function show($id)
    {
        $tesis = Tesis::findOrFail($id);
        return view('tesis.show', compact('tesis'));
    }

    public function edit($id)
    {
        $tesis = Tesis::
        join('material', 'tesis.material_id', '=', 'material.id')
            ->where('tesis.id', $id)
            ->first();
           
        return view('tesis.edit', compact('tesis'));
    }

    public function update(StoreTesis $request, $id)
    {
        $tesis = Tesis::findOrFail($id);

        $tesis->fill($request->all());
        $tesis->save();

        return redirect()->route('tesis.show',
            ['tesis' => $tesis->id]
        )->with('mensaje', 'tesis se ha modificado');

    }
}

