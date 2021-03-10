<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreRevista;
use App\Models\Autor;
use App\Models\Material;
use App\Models\Revista;
use Illuminate\Http\Request;
use DB;
class RevistaController extends Controller
{
    public function index(Request $request)
    {

        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $revistas = Revista::
            where('editorial', 'like', $filtro)
            ->orWhereHas('material', function ($query) use ($filtro) {
                $query->where('titulo', 'like', $filtro)
                ->orWhere('anio_publicacion', 'like', $filtro);
            })
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('revistas.index', compact('revistas'));
    }

    public function create()
    {
        return view('revistas.create');
    }

    public function store(StoreRevista $request)
    {
        $valores = $request->all();

        $material=Material::create($valores);
        $valores['material_id']= $material->id;
        $revista = Revista::create($valores);
        return redirect()
            ->route('revistas.show', ['revista' => $revista->id])
            ->with('mensaje', 'La revista se ha creado con éxito');
    }

    public function show($id)
    {
        $revista = Revista::findOrFail($id);
        return view('revistas.show', compact('revista'));
    }

    public function edit($id)
    {
        $revista = Revista::findOrFail($id);
        return view('revistas.edit', compact('revista'));
    }

    public function update(StoreRevista $request, $id)
    {
        $revista = Revista::findOrFail($id);

        $revista->fill($request->all());
        $revista->save();

        return redirect()->route('revistas.show',
            ['revista' => $revista->id]
        )->with('mensaje', 'La revista se ha modificado');

    }

    public function cambiarEstado($id, $estado)
    {
        $revista = Revista::findOrFail($id);
        $revista->update(array('alta' => $estado));
        $revista->save();
        if($estado)
        {
            return redirect()->route('revistas.index')
                ->with('mensaje', 'La revista ha sido dado de alta');
        }
        else{
            return redirect()->route('revistas.index')
                ->with('mensajeRojo', 'La revista ha sido dado de baja');
        }
    }
}
