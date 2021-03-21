<?php


namespace App\Http\Controllers;


use App\Models\Material;
use App\Models\profocom;
use Illuminate\Http\Request;

class ProfocomController extends Controller
{
    public function index(Request $request)
    {

        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $profocoms = Profocom::
//        where('titulo', 'like', $filtro)
        Where('codigo', 'like', $filtro)
        ->orWhereHas('material', function ($query) use ($filtro) {
            $query->where('titulo', 'like', $filtro)
            ->orWhere('anio_publicacion', 'like', $filtro);
        })
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('profocoms.index', compact('profocoms'));
    }

    public function create()
    {
        return view('profocoms.create');
    }

    public function store(Request $request)
    {
        $valores = $request->all();

        $material=Material::create($valores);
        $valores['material_id']= $material->id;
        $profocom = Profocom::create($valores);
        return redirect()
            ->route('profocoms.show', ['profocom' => $profocom->id])
            ->with('mensaje', 'Profocom se ha creado con éxito');
    }

    public function show($id)
    {
        $profocom = Profocom::findOrFail($id);
        return view('profocoms.show', compact('profocom'));
    }
}
