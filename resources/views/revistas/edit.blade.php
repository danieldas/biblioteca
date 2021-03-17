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
                <div class="row">
                    {!! Form::model($revista, ['route' => ['revistas.update', $revista->id], 'method' => 'patch']) !!}

                    @include('materiales.form')
                    @include('revistas.form')

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
