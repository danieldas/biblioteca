<?php


namespace App\Http\Controllers;


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
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('tesis.index', compact('tesis'));
    }

    public function show($id)
    {
        $tesis = Tesis::findOrFail($id);
        return view('tesis.show', compact('tesis'));
    }
}
