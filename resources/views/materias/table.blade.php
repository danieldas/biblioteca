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
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

