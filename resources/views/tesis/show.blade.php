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
                        {!! Form::label('nroejemplares', 'Nroejemplares:') !!}
                        <p>{{ $tesis->nroejemplares }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disponibles', 'Disponibles:') !!}
                        <p>{{ $tesis->disponibles }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('titulo', 'Título:') !!}
                        <p>{{ $tesis->material->titulo }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('aniopublic', 'Año:') !!}
                        <p>{{ $tesis->material->aniopublic }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nropaginas', 'Páginas:') !!}
                        <p>{{ $tesis->material->nropaginas }}</p>
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
                        {!! Form::label('urldescarga', 'Título:') !!}
                        <p>{{ $tesis->material->urldescarga }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('osbervacion', 'Observación:') !!}
                        <p>{{ $tesis->material->osbervacion }}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado', 'Estado:') !!}
                        <p>{{ $tesis->material->estado }}</p>
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
                        <p>{{ $tesis->material->disponibilidad }}</p>
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
                        {!! Form::label('ejemplares', 'Ejemplares:') !!}
                        <p>{{ $tesis->material->ejemplares }}</p>
                    </div>




                    <a href="{{ route('tesis.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

