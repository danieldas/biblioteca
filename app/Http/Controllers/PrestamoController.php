<?php


namespace App\Http\Controllers;


use App\Http\Requests\StorePrestamo;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index(Request $request)
    {
        $alta = $request->alta;
        if($alta == null)
        {
            $alta=true;
        }
        $filtro = $request->buscar;
        $filtro = "%$filtro%";

        $prestamos = Prestamo::
            where([['modalidad', 'like', $filtro], ['alta', $alta]])
            ->orderBy('modalidad')
            ->paginate(50);
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        return view('prestamos.create');
    }

    public function store(StorePrestamo $request)
    {
        $valores = $request->all();

        $prestamo = Prestamo::create($valores);
        return redirect()
            ->route('pretamos.show', ['prestamo' => $prestamo->id])
            ->with('mensaje', 'El prestamo se ha creado con éxito');
    }

    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('prestamos.show', compact('prestamo'));
    }

    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('prestamos.edit', compact('prestamo'));
    }

    public function update(StorePrestamo $request, $id)
    {
        $prestamo = Prestamo::findOrFail($id);

        $prestamo->fill($request->all());
        $prestamo->save();

        return redirect()->route('prestamos.show',
            ['prestamo' => $pretamo->id]
        )->with('mensaje', 'El prestamo se ha modificado');

    }
}


