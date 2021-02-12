<?php


namespace App\Http\Controllers;


use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
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

        $autores = Autor::
            where([['nombre', 'like', $filtro], ['alta', $alta]])
            ->orderBy('nombre')
            ->paginate(50);
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $valores = $request->all();

        $autor = Autor::create($valores);
        return redirect()
            ->route('autores.show', ['autore' => $autor->id])
            ->with('mensaje', 'El autor se ha creado con éxito');
    }

    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.show', compact('autor'));
    }

    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);

        $autor->fill($request->all());
        $autor->save();

        return redirect()->route('autores.show',
            ['autore' => $autor->id]
        )->with('mensaje', 'El autor se ha modificado');

    }

    public function cambiarEstado($id, $estado)
    {
        $autor = Autor::findOrFail($id);
        $autor->update(array('alta' => $estado));
        $autor->save();
        if($estado)
        {
            return redirect()->route('autores.index')
                ->with('mensaje', 'El autor ha sido dado de alta');
        }
        else{
            return redirect()->route('autores.index')
                ->with('mensajeRojo', 'El autor ha sido dado de baja');
        }
    }
}
