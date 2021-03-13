<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Año</th>
            <th>Categoria</th>
            <th>Tutor</th>
            <th>Revisor</th>
            <th>Autores</th>
            <th>Materias</th>

        </tr>
        </thead>
        <tbody>
        @foreach($tesis as $tesis)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $tesis->material->titulo }}</td>
                <td>{{ $tesis->material->anio_publicacion }}</td>
                <td>{{ $tesis->categoria }}</td>
                <td>{{ $tesis->tutor }}</td>
                <td>{{ $tesis->revisor }}</td>
                <td>{{ $tesis->material->escritores }}</td>
                <td>{{ $tesis->material->asignaturas }}</td>
                <td>
                    <div class='btn-group'>

                        <a href="{{ route('tesis.show', [$tesis->id]) }}" class='btn btn-default btn-xs'><i
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

