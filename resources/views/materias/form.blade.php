@if($errors->has('nombre'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('nombre') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Nombre', 'Nombre *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('sigla'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('sigla') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('sigla', 'Sigla *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::text('sigla', null, ['class' => 'form-control', 'maxlength' => '10', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>
