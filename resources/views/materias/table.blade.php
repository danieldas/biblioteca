<div class="table-responsive">
    <table class="table" id="materias-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Sigla</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($materias as $materia)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $materia->nombre }}</td>
                <td>{{ $materia->sigla}}</td>
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('materias.show', [$materia->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

                        <a href="{{ route('materias.edit', [$materia->id]) }}" class='btn btn-warning btn-xs'><i
                                class="glyphicon glyphicon-edit" title="Editar"></i></a>
                        @if($materia->alta)
                        <a href="{{ route('materias.cambiarEstado', ['id' => $materia->id, 'estado' => '0'])}}"
                           class="btn btn-danger btn-xs" title="Dar Baja">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                        </a>
                        @else
                        <a href="{{ route('materias.cambiarEstado', ['id' => $materia->id, 'estado' => '1'])}}"
                           class="btn btn-success btn-xs" title="Dar alfa">
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

