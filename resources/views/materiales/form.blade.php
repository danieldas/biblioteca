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

<div id="appAutores">
    @if($errors->has('autor_id'))
        <div class="form-group has-error">
            <div class="help-block">
                <label class="alert-danger">{{ $errors->first('autor_id') }}</label>
            </div>
        </div>
    @endif

    <div class="form-group">
        <div class="col-lg-2">
            {!! Form::label('Autor', 'Autor *:', ['class' => 'control-label']) !!}
        </div>
        <div class="col-lg-6">
            {!! Form::select('autor_id', \App\Patrones\Fachada::getAutores(), null, ['class' => 'form-control', 'required', 'v-model' => 'autor_id']) !!}
        </div>
        <div class="col-lg-2">
            <a title="Agregar" @click="save()"
               class='btn btn-primary  pull-right'>Guardar <i
                    class="glyphicon glyphicon-plus"></i></a>
        </div>
        <br><br>
    </div>
    <br><br>
        <div class="table-responsive">
            <table class="table" id="autores-table">
                <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(row, index) in autores" :key="index">
                    <td>@{{ row.nombre }}</td>
{{--                    <td style="width: 50px" class="text-right">@{{ row.monto }}</td>--}}
{{--                    <td style="width: 80px">--}}
{{--                        <button v-if="formulario.es_escritura" title="Eliminar" @click="eliminarAnticipo(row.id)"--}}
{{--                                class="btn btn-danger btn-xs">--}}
{{--                            <i class="glyphicon glyphicon-trash"></i></button>--}}
{{--                        <button @click="imprimirAnticipo(row.id)" title="Imprimir" class="btn btn-warning btn-xs">--}}
{{--                            <i class="glyphicon glyphicon-print"></i></button>--}}
{{--                    </td>--}}
                </tr>
                </tbody>
            </table>
        </div>
</div>
@push('scripts')
    <script type="text/javascript">
        appFormulario = new Vue({
            el: "#appAutores",
            data: {
                autor_id:'',
                autores: [],
            },
            mounted(){
              console.log("{{$revista->material_id}}");
              this.getAutores();
            },
            methods: {
                save() {
                    axios.post("/autorMaterials", {
                        autor_id: this.autor_id,
                        material_id: "{{$revista->material_id}}",
                        {{--formulario_liquidacion_id: "{{ $formularioLiquidacion->id }}"--}}
                    }).then(response => {
                        if (response.data.res) {
                            toastr.success(response.data.message);
                            this.autor_id = '';
                            this.getAutores();
                        } else
                            toastr.error(response.data.message);
                    }).catch(e => {
                        toastr.error("Error! vuelve a intentarlo más tarde.");
                    });
                },
                getAutores() {
                    let url = "{{ url('autorMaterials') }}";
                    axios.get(url, {
                        params: {material_id: "{{$revista->material_id}}"}
                    }).then(response => {
                        this.autores = response.data;
                    });
                },
            }

        });
    </script>
@endpush
