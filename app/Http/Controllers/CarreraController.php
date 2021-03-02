<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreCarrera;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
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

        $carreras = Carrera::
        where([['nombre', 'like', $filtro], ['alta', $alta]])
            ->orderBy('nombre')
            ->paginate(50);
        return view('carreras.index', compact('carreras'));
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(StoreCarrera $request)
    {
        $valores = $request->all();

        $carrera = Carrera::create($valores);
        return redirect()
            ->route('carreras.show', ['carrera' => $carrera->id])
            ->with('mensaje', 'La carrera se ha creado con éxito');
    }

    public function show($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.show', compact('carrera'));
    }

    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit', compact('carrera'));
    }

    public function update(StoreCarrera $request, $id)
    {
        $carrera = Carrera::findOrFail($id);

        $carrera->fill($request->all());
        $carrera->save();

        return redirect()->route('carreras.show',
            ['carrera' => $carrera->id]
        )->with('mensaje', 'La carrera se ha modificado');

    }

    public function cambiarEstado($id, $estado)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->update(array('alta' => $estado));
        $carrera->save();
        if($estado)
        {
            return redirect()->route('carreras.index')
                ->with('mensaje', 'La carrera ha sido dado de alta');
        }
        else{
            return redirect()->route('carreras.index')
                ->with('mensajeRojo', 'La carrera ha sido dado de baja');
        }
    }
}
