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
                <div class="row" style="padding-left: 20px">


                    <div class="form-group">
                        {!! Form::label('editorial', 'Editorial:') !!}
                        <p>{{ $revista->editorial }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('edicion', 'Edición:') !!}
                        <p>{{ $revista->edicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('procedencia', 'Procedencia:') !!}
                        <p>{{ $revista->procedencia }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('titulo', 'Título:') !!}
                        <p>{{ $revista->material->titulo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('anio_publicacion', 'Año:') !!}
                        <p>{{ $revista->material->anio_publicacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nro_paginas', 'Páginas:') !!}
                        <p>{{ $revista->material->nro_paginas }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('forma', 'Forma:') !!}
                        <p>{{ $revista->material->forma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        <p>{{ $revista->material->tipo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('idioma', 'Idioma:') !!}
                        <p>{{ $revista->material->idioma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('url', 'Título:') !!}
                        <p>{{ $revista->material->url }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $revista->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('condicion', 'Condición:') !!}
                        <p>{{ $revista->material->condicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('isbn', 'Isbn:') !!}
                        <p>{{ $revista->material->isbn }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disponibilidad', 'Disponibilidad:') !!}
                        @if($revista->material->disponibilidad)    
                        <p> Disponible</p> 
                        @else
                        <p>No Disponible </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripción', 'Descripción:') !!}
                        <p>{{ $revista->material->descripción }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('catalogo', 'Catálogo:') !!}
                        <p>{{ $revista->material->catalogo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('autores', 'Autores:') !!}
                        <p>{{ $revista->material->escritores }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('materias', 'Materias:') !!}
                        <p>{{ $revista->material->asignaturas }}</p>
                    </div>





                    <a href="{{ route('revistas.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
