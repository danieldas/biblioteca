@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Libro
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
                        <p>{{ $libro->editorial }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('edicion', 'Edición:') !!}
                        <p>{{ $libro->edicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('procedencia', 'Procedencia:') !!}
                        <p>{{ $libro->procedencia }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('costo', 'Costo:') !!}
                        <p>{{ $libro->costo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('titulo', 'Título:') !!}
                        <p>{{ $libro->material->titulo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('aniopublic', 'Año:') !!}
                        <p>{{ $libro->material->aniopublic }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nropaginas', 'Páginas:') !!}
                        <p>{{ $libro->material->nropaginas }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('forma', 'Forma:') !!}
                        <p>{{ $libro->material->forma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        <p>{{ $libro->material->tipo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('idioma', 'Idioma:') !!}
                        <p>{{ $libro->material->idioma }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('urldescarga', 'Título:') !!}
                        <p>{{ $libro->material->urldescarga }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $libro->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado', 'Estado:') !!}
                        <p>{{ $libro->material->estado }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('condicion', 'Condición:') !!}
                        <p>{{ $libro->material->condicion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('isbn', 'Isbn:') !!}
                        <p>{{ $libro->material->isbn }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disponibilidad', 'Disponibilidad:') !!}
                        <p>{{ $libro->material->disponibilidad }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripción', 'Descripción:') !!}
                        <p>{{ $libro->material->descripción }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('catalogo', 'Catálogo:') !!}
                        <p>{{ $libro->material->catalogo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('ejemplares', 'Ejemplares:') !!}
                        <p>{{ $libro->material->ejemplares }}</p>
                    </div>




                    <a href="{{ route('libros.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection