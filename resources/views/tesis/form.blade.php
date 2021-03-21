@if($errors->has('categoria'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('categoria') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Categoria', 'Categoria *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('categoria', \App\Patrones\Fachada::getCategorias(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('tutor'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('tutor') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Tutor', 'Tutor *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('tutor', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('revisor'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('revisor') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Revisor', 'Revisor *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('revisor', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('carrera_id'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('carrera_id') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Carrera', 'Carrera *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
    {!! Form::select('carrera_id', \App\Patrones\Fachada::getCarreras(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

