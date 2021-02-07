@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materias
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($materia, ['route' => ['materias.update', $materia->id], 'method' => 'patch']) !!}

                    @include('materias.form')

                    <div class="form-group col-sm-12 text-center">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('materias.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

