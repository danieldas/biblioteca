@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profocom
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
                        {!! Form::label('codigo', 'codigo:') !!}
                        <p>{{ $profocom->codigo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('titulo', 'Título:') !!}
                        <p>{{ $profocom->material->titulo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('aniopublic', 'Año:') !!}
                        <p>{{ $profocom->material->aniopublic }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nropaginas', 'Páginas:') !!}
                        <p>{{ $profocom->material->nropaginas }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('forma', 'Forma:') !!}
                        <p>{{ $profocom->material->forma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        <p>{{ $profocom->material->tipo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('idioma', 'Idioma:') !!}
                        <p>{{ $profocom->material->idioma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('urldescarga', 'Título:') !!}
                        <p>{{ $profocom->material->urldescarga }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $profocom->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado', 'Estado:') !!}
                        <p>{{ $profocom->material->estado }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('condicion', 'Condición:') !!}
                        <p>{{ $profocom->material->condicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('isbn', 'Isbn:') !!}
                        <p>{{ $profocom->material->isbn }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disponibilidad', 'Disponibilidad:') !!}
                        <p>{{ $profocom->material->disponibilidad }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripción', 'Descripción:') !!}
                        <p>{{ $profocom->material->descripción }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('catalogo', 'Catálogo:') !!}
                        <p>{{ $profocom->material->catalogo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('ejemplares', 'Ejemplares:') !!}
                        <p>{{ $profocom->material->ejemplares }}</p>
                    </div>




                    <a href="{{ route('profocoms.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

