@if($errors->has('inicio'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('inicio') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Inicio', 'Inicio *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('inicio', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('fin'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('fin') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Fin', 'Fin *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('fin', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('estado'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('estado') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Estado', 'Estado *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('Estado', \App\Patrones\Fachada::getFormas(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>