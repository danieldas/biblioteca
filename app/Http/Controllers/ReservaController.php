<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreReserva;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
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

        $reservas = Reserva::
            where([['inicio', 'like', $filtro], ['alta', $alta]])
            ->orderBy('inicio')
            ->paginate(50);
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(StoreReserva $request)
    {
        $valores = $request->all();

        $reserva = Reserva::create($valores);
        return redirect()
            ->route('reservas.show', ['reserva' => $reserva->id])
            ->with('mensaje', 'La reserva se ha creado con éxito');
    }

    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.edit', compact('reserva'));
    }

    public function update(StoreReserva $request, $id)
    {
        $reserva= Reserva::findOrFail($id);

        $reserva->fill($request->all());
        $reserva->save();

        return redirect()->route('reservas.show',
            ['reserva' => $reserva->id]
        )->with('mensaje', 'La reserva ha modificado');

    }
    public function guardar($material_id, $ruta){

        $valores['lector_id']= auth()->user()->lector->id;
        $valores['material_id']= $material_id;
        $reserva = Reserva::create($valores);

        $ruta=$ruta.".index";

        return redirect()->route($ruta)->with('mensaje', 'La reserva ha sido registrada');

    }
}
