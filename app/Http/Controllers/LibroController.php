<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreLibro;
use App\Models\Autor;
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
            ->orWhere('anio_publicacion', 'like', $filtro);
        })
            ->orderByDesc('created_at')
            ->paginate('50');
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(StoreLibro $request)
    {
        $valores = $request->all();

        $material=Material::create($valores);
        $valores['material_id']= $material->id;
        $libro = Libro::create($valores);
        return redirect()
            ->route('libros.edit', ['libro' => $libro->id])
            ->with('mensaje', 'El libro se ha creado con éxito');
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));

    }

    public function edit($id)
    {
        $libro = Material::
        join('libro', 'libro.material_id', '=', 'material.id')
            ->where('libro.id', $id)
            ->first();
        return view('libros.edit', compact('libro'));
    }

    public function update(StoreLibro $request, $id)
    {
        $libro = Libro::findOrFail($id);

        $libro->fill($request->all());
        $libro->save();

        return redirect()->route('libros.show',
            ['libro' => $libro->id]
        )->with('mensaje', 'El libro se ha modificado');

    }
}
