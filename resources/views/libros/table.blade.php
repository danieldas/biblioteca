<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Año</th>
            <th>Editorial</th>
            <th>Edicion</th>
            <th>Procedencia</th>
            <th>Costo</th>

        </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $libro->material->titulo }}</td>
                <td>{{ $libro->material->anio_publicacion }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->edicion }}</td>
                <td>{{ $libro->procedencia }}</td>
                <td>{{ $libro->costo }}</td>
            
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('libros.show', [$libro->id]) }}" class='btn btn-default btn-xs'><i
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

