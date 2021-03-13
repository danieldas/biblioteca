@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Material
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
                        {!! Form::label('titulo', 'Titulo:') !!}
                        <p>{{ $material->titulo }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('editorial', 'Editorial:') !!}
                        <p>{{ $material->editorial }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('edicion', 'Edicion:') !!}
                       <p>{{ $material->edicion }}</p>
                    </div>




                    <a href="{{ route('materiales.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

