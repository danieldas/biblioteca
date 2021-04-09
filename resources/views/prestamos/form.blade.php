@if($errors->has('modalidad'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('modalidad') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Modalidad', 'Modalidad *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('modalidad', \App\Patrones\Fachada::getFormas(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('garantia'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('garantia') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Garantia', 'Garantia *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('garantia', \App\Patrones\Fachada::getFormas(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('fecha_prestamo'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('fecha_prestamo') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('FechaPretamo', 'FechaPestamo *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('fecha_prestamo', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('fecha_limite'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('fecha_limite') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('FechaLimite', 'FechaLimite *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('fecha_limite', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('fecha_devolucion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('fecha_devolucion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('FechaDevolucion', 'FechaDevolucion *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('fecha_devolucion', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
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
        {!! Form::label('Observacion', 'Observacion *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('observacion', null, ['class' => 'form-control', 'maxlength' => '50', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>
