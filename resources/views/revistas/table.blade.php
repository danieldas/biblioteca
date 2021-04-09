<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Año</th>
            <th>Edición</th>
            <th>Editorial</th>
            <th>Autores</th>
            <th>Materias</th>
        </tr>
        </thead>
        <tbody>
        @foreach($revistas as $revista)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $revista->material->titulo }}</td>
                <td>{{ $revista->material->anio_publicacion }}</td>
                <td>{{ $revista->edicion }}</td>
                <td>{{ $revista->editorial }}</td>
                <td>{{ $revista->material->escritores }}</td>
                <td>{{ $revista->material->asignaturas }}</td>
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('revistas.show', [$revista->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

                            <a href="{{ route('revistas.edit', [$revista->id]) }}" class='btn btn-warning btn-xs'><i
                                    class="glyphicon glyphicon-edit" title="Editar"></i></a>
                        <a href="{{ route('reservas.guardar', [$revista->material_id, 'revistas']) }}" class='btn btn-success btn-xs'><i
                                class="glyphicon glyphicon-ok" title="Reservar"></i></a>


                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
