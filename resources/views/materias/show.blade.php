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
                @if(session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif
                @if(session('mensajeRojo'))
                    <div class="alert alert-danger">
                        {{ session('mensajeRojo') }}
                    </div>
                @endif
                <div class="row" style="padding-left: 20px">


                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre:') !!}
                        <p>{{ $materia->nombre }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('sigla', 'Sigla:') !!}
                        <p>{{ $materia->sigla }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('sigla', 'Sigla:') !!}
                        <p>{{ $materia->alta}}</p>
                    </div>
                    


                    <a href="{{ route('materias.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

