<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Nombre Completo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $autor->nombre }}</td>

                <td>
                    <div class='btn-group'>

                        <a href="{{ route('autores.show', [$autor->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>
                        @if($autor->alta)

                        <a href="{{ route('autores.edit', [$autor->id]) }}" class='btn btn-warning btn-xs'><i
                                class="glyphicon glyphicon-edit" title="Editar"></i></a>

                        <a href="{{ route('autores.cambiarEstado', ['id' => $autor->id, 'estado' => '0'])}}"
                           class="btn btn-danger btn-xs" title="Dar Baja">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                        </a>
                        @else

                            <a href="{{ route('autores.cambiarEstado', ['id' => $autor->id, 'estado' => '1'])}}"
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
