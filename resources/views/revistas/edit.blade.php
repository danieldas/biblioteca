@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Revista
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
                <div class="row">
                    {!! Form::model($revista, ['route' => ['revistas.update', $revista->id], 'method' => 'patch']) !!}

                    @include('materiales.form')
                    @include('revistas.form')
                    @include('materiales.autores')
                    @include('materiales.materias')

                    <div class="form-group col-sm-12 text-center">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('revistas.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
