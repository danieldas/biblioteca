@if($errors->has('titulo'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('titulo') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Titulo', 'Titulo *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::text('titulo', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

{{--@if($errors->has('editorial'))--}}
{{--    <div class="form-group has-error">--}}
{{--        <div class="help-block">--}}
{{--            <label class="alert-danger">{{ $errors->first('editorial') }}</label>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
{{--<div class="form-group">--}}
{{--    <div class="col-lg-2">--}}
{{--        {!! Form::label('Editorial', 'Editorial *:', ['class' => 'control-label']) !!}--}}
{{--    </div>--}}
{{--    <div class="col-lg-8">--}}

{{--        {!! Form::text('editorial', null, ['class' => 'form-control', 'maxlength' => '20', 'required', 'autocomplete'=>'off']) !!}--}}
{{--    </div>--}}
{{--    <br><br>--}}
{{--</div>--}}

{{--@if($errors->has('edicion'))--}}
{{--    <div class="form-group has-error">--}}
{{--        <div class="help-block">--}}
{{--            <label class="alert-danger">{{ $errors->first('edicion') }}</label>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
{{--<div class="form-group">--}}
{{--    <div class="col-lg-2">--}}
{{--        {!! Form::label('Edicion', 'Edicion *:', ['class' => 'control-label']) !!}--}}
{{--    </div>--}}
{{--    <div class="col-lg-8">--}}

{{--        {!! Form::text('edicion', null, ['class' => 'form-control', 'maxlength' => '20', 'required', 'autocomplete'=>'off']) !!}--}}
{{--    </div>--}}
{{--    <br><br>--}}
{{--</div>--}}
