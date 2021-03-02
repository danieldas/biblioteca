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
                        {!! Form::label('aniopublic', 'Año:') !!}
                        <p>{{ $revista->material->aniopublic }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nropaginas', 'Páginas:') !!}
                        <p>{{ $revista->material->nropaginas }}</p>
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
                        {!! Form::label('urldescarga', 'Título:') !!}
                        <p>{{ $revista->material->urldescarga }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $revista->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado', 'Estado:') !!}
                        <p>{{ $revista->material->estado }}</p>
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
                        <p>{{ $revista->material->disponibilidad }}</p>
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
                        {!! Form::label('ejemplares', 'Ejemplares:') !!}
                        <p>{{ $revista->material->ejemplares }}</p>
                    </div>




                    <a href="{{ route('revistas.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
