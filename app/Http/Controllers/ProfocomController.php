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

    public function show($id)
    {
        $profocom = Profocom::findOrFail($id);
        return view('profocoms.show', compact('profocom'));
    }
}
