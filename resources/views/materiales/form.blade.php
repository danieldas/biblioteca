@if($errors->has('titulo'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('titulo') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Titulo', 'Título *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('titulo', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('anio_publicacion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('anio_publicacion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Anio', 'Año *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('anio_publicacion', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('nro_paginas'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('nro_paginas') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('NroPaginas', 'Nro Páginas *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('nro_paginas', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('forma'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('forma') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Forma', 'Forma *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('forma', \App\Patrones\Fachada::getFormas(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('idioma'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('idioma') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Idioma', 'Idioma *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('idioma', \App\Patrones\Fachada::getIdiomas(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('url'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('url') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Url', 'Url *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('url', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('observacion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('observacion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Observacion', 'Observación *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('observacion', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('condicion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('condicion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Condicion', 'Condición *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('condicion', \App\Patrones\Fachada::getCondiciones(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('isbn'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('isbn') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Isbn', 'Isbn *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('isbn', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


@if($errors->has('descripcion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('descripcion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Descripcion', 'Descripción *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('catalogo'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('catalogo') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Catalogo', 'Catálogo *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('catalogo', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>
{{--@if($errors->has('materia_id'))--}}
{{--    <div class="form-group has-error">--}}
{{--        <div class="help-block">--}}
{{--            <label class="alert-danger">{{ $errors->first('materia_id') }}</label>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
{{--<div class="form-group">--}}
{{--    <div class="col-lg-2">--}}
{{--        {!! Form::label('Materia', 'Materia *:', ['class' => 'control-label']) !!}--}}
{{--    </div>--}}
{{--    <div class="col-lg-8">--}}
{{--        {!! Form::select('materia_id', \App\Patrones\Fachada::getMaterias(), null, ['class' => 'form-control', 'required']) !!}--}}
{{--    </div>--}}
{{--    <br><br>--}}
{{--</div>--}}
