<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Año</th>
            <th>Ejemplares</th>
            <th>Codigo</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($profocoms as $profocom)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $profocom->material->titulo }}</td>
                <td>{{ $profocom->material->aniopublic }}</td>
                <td>{{ $profocom->material->ejemplares }}</td>
                <td>{{ $profocom->codigo }}</td>
            
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('profocoms.show', [$profocom->id]) }}" class='btn btn-default btn-xs'><i
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
