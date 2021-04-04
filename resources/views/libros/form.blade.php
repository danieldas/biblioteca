@if($errors->has('editorial'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('editorial') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Editorial', 'Editorial *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('editorial', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('edicion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('edicion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Edicion', 'Edicion *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('edicion', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('procedencia'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('procedencia') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Procedencia', 'Procedencia *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::select('procedencia', \App\Patrones\Fachada::getprocedencias(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('costo'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('costo') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Costo', 'Costo *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::number('costo', null, ['class' => 'form-control', 'maxlength' => '4','step'=>'0.01', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>