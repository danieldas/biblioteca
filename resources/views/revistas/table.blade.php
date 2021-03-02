<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Año</th>
            <th>Ejemplares</th>
            <th>Edición</th>
            <th>Editorial</th>
        </tr>
        </thead>
        <tbody>
        @foreach($revistas as $revista)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $revista->material->titulo }}</td>
                <td>{{ $revista->material->aniopublic }}</td>
                <td>{{ $revista->material->ejemplares }}</td>
                <td>{{ $revista->edicion }}</td>
                <td>{{ $revista->editorial }}</td>
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('revistas.show', [$revista->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

{{--                            <a href="{{ route('autores.edit', [$autor->id]) }}" class='btn btn-warning btn-xs'><i--}}
{{--                                    class="glyphicon glyphicon-edit" title="Editar"></i></a>--}}


                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
