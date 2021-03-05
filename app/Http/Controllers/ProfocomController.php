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
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('profocoms.index', compact('profocoms'));
    }

    public function show($id)
    {
        $profocom = Profocom::findOrFail($id);
        return view('profocoms.show', compact('profocom'));
    }
}