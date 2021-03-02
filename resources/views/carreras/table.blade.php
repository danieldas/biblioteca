<div class="table-responsive">
    <table class="table" id="carreras-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($carreras as $carrera)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $carrera->nombre }}</td>

                <td>
                    <div class='btn-group'>

                        <a href="{{ route('carreras.show', [$carrera->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>
                        @if($carrera->alta)

                            <a href="{{ route('carreras.edit', [$carrera->id]) }}" class='btn btn-warning btn-xs'><i
                                    class="glyphicon glyphicon-edit" title="Editar"></i></a>

                            <a href="{{ route('carreras.cambiarEstado', ['id' => $carrera->id, 'estado' => '0'])}}"
                               class="btn btn-danger btn-xs" title="Dar Baja">
                                <i class="glyphicon glyphicon-arrow-down"></i>
                            </a>
                        @else

                            <a href="{{ route('carreras.cambiarEstado', ['id' => $carrera->id, 'estado' => '1'])}}"
                               class="btn btn-success btn-xs" title="Dar Alta">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

