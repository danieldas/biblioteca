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
                <div class="row">
                    {!! Form::model($material, ['route' => ['materiales.update', $material->id], 'method' => 'patch']) !!}

                    @include('materiales.form')

                    <div class="form-group col-sm-12 text-center">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('materiales.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
