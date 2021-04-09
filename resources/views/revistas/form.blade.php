@if($errors->has('edicion'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('edicion') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Edicion', 'Edición *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('edicion', null, ['class' => 'form-control', 'maxlength' => '30', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

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
        {!! Form::text('editorial', null, ['class' => 'form-control', 'maxlength' => '30', 'required', 'autocomplete'=>'off']) !!}
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
        {!! Form::select('procedencia', \App\Patrones\Fachada::getProcedencias(), null, ['class' => 'form-control', 'required']) !!}
    </div>
    <br><br>
</div>


