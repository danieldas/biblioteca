@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tesis
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
                        {!! Form::label('categoria', 'Categoria:') !!}
                        <p>{{ $tesis->categoria }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('tutor', 'Tutor:') !!}
                        <p>{{ $tesis->tutor }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('revisor', 'Revisor:') !!}
                        <p>{{ $tesis->revisor }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('titulo', 'Título:') !!}
                        <p>{{ $tesis->material->titulo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('anio_publicacion', 'Año:') !!}
                        <p>{{ $tesis->material->anio_publicacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nro_paginas', 'Páginas:') !!}
                        <p>{{ $tesis->material->nro_paginas }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('forma', 'Forma:') !!}
                        <p>{{ $tesis->material->forma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        <p>{{ $tesis->material->tipo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('idioma', 'Idioma:') !!}
                        <p>{{ $tesis->material->idioma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('url', 'Título:') !!}
                        <p>{{ $tesis->material->url }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $tesis->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('condicion', 'Condición:') !!}
                        <p>{{ $tesis->material->condicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('isbn', 'Isbn:') !!}
                        <p>{{ $tesis->material->isbn }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disponibilidad', 'Disponibilidad:') !!}
                        @if($tesis->material->disponibilidad)    
                        <p> Disponible</p> 
                        @else
                        <p>No Disponible </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripción', 'Descripción:') !!}
                        <p>{{ $tesis->material->descripción }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('catalogo', 'Catálogo:') !!}
                        <p>{{ $tesis->material->catalogo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('autores', 'Autores:') !!}
                        <p>{{ $tesis->material->escritores }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('materias', 'Materias:') !!}
                        <p>{{ $tesis->material->asignaturas }}</p>
                    </div>
                

                    <a href="{{ route('tesis.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

