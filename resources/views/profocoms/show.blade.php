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
                        {!! Form::label('anio_publicacion', 'Año:') !!}
                        <p>{{ $profocom->material->anio_publicacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nro_paginas', 'Páginas:') !!}
                        <p>{{ $profocom->material->nro_paginas }}</p>
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
                        {!! Form::label('url', 'Título:') !!}
                        <p>{{ $profocom->material->url }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('observacion', 'Observación:') !!}
                        <p>{{ $profocom->material->observacion }}</p>
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
                        @if($profocom->material->disponibilidad)    
                        <p> Disponible</p> 
                        @else
                        <p>No Disponible </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripción', 'Descripción:') !!}
                        <p>{{ $profocom->material->descripcion}}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('catalogo', 'Catálogo:') !!}
                        <p>{{ $profocom->material->catalogo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('autores', 'Autores:') !!}
                        <p>{{ $profocom->material->escritores }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('materias', 'Materias:') !!}
                        <p>{{ $profocom->material->asignaturas }}</p>
                    </div>
                    


                    <a href="{{ route('profocoms.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

