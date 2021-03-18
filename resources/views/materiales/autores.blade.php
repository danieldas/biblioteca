<div id="appAutores">
    <hr>
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
            <a title="Agregar" @click="guardarAutor()"
               class='btn btn-primary  pull-right'>Guardar <i
                    class="glyphicon glyphicon-plus"></i></a>
        </div>
        <br><br>
    </div>
    <h3 style="text-align: center">AUTORES</h3>
    <div class="table-responsive" style="padding-left: 20%; padding-right: 20%">
        <table class="table" id="autores-table">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(row, index) in autores" :key="index">
                <td>@{{ index + 1 }}</td>
                <td>@{{ row.nombre }}</td>
                <td >
                    <button type="button" title="Eliminar" @click="eliminarAutor(row.id)" class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>

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
                this.getAutores();
            },
            methods: {
                guardarAutor() {
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
                eliminarAutor(id) {
                    if (confirm("Seguro que quiere eliminar este registro?")) {
                        axios.delete("/autorMaterials/" + id).then(response => {
                            if (response.data.res) {
                                toastr.success(response.data.message);
                                this.getAutores();
                            } else {
                                toastr.error(response.data.message);
                            }
                        }).catch(e => {
                            toastr.error(e.error);
                        })
                    }
                },
            }

        });
    </script>
@endpush
