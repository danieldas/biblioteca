<?php


namespace App\Http\Controllers;


use App\Models\Material;
use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(Request $request)
    {

        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $libros = Libro::
//        where('titulo', 'like', $filtro)
        Where('editorial', 'like', $filtro)
        ->orWhereHas('material', function ($query) use ($filtro) {
            $query->where('titulo', 'like', $filtro)
            ->orWhere('ejemplares', 'like', $filtro);
        })
           
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('libros.index', compact('libros'));
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }
}
