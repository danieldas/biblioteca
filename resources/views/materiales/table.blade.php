<div class="table-responsive">
    <table class="table" id="material-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Año</th>
            
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($materiales as $material)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $material->titulo }}</td>
                <td>{{ $material->anio_publicacion}}</td>--}}

                <td>
                    <div class='btn-group'>

                        <a href="{{ route('materiales.show', [$material->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

                        <a href="{{ route('materiales.edit', [$material->id]) }}" class='btn btn-warning btn-xs'><i
                                class="glyphicon glyphicon-edit" title="Editar"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


