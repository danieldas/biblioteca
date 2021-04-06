<div id="appMaterias">
    <hr>
    @if($errors->has('materia_id'))
        <div class="form-group has-error">
            <div class="help-block">
                <label class="alert-danger">{{ $errors->first('materia_id') }}</label>
            </div>
        </div>
    @endif

    <div class="form-group">
        <div class="col-lg-2">
            {!! Form::label('Materia', 'Materia *:', ['class' => 'control-label']) !!}
        </div>
        <div class="col-lg-6">
            {!! Form::select('materia_id', \App\Patrones\Fachada::getMaterias(), null, ['class' => 'form-control', 'required', 'v-model' => 'materia_id']) !!}
        </div>
        <div class="col-lg-2">
            <a title="Agregar" @click="guardarMateria()"
               class='btn btn-primary  pull-right'>Agregar <i
                    class="glyphicon glyphicon-plus"></i></a>
        </div>
        <br><br>
    </div>
    <h3 style="text-align: center">MATERIAS</h3>
    <div class="table-responsive" style="padding-left: 20%; padding-right: 20%">
        <table class="table" id="materias-table">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Sigla</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(row, index) in materias" :key="index">
                <td>@{{ index + 1 }}</td>
                <td>@{{ row.nombre }}</td>
                <td>@{{ row.sigla }}</td>
                <td >
                    <button type="button" title="Eliminar" @click="eliminarMateria(row.id)" class="btn btn-danger btn-xs">
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
            el: "#appMaterias",
            data: {
                materia_id:'',
                materias: [],
                material_id:''
            },
            mounted(){
                this.getMaterialId();
                this.getMaterias();
            },
            methods: {
                getMaterialId(){
                    this.material_id = <?PHP echo !empty($revista) ? $revista->material_id
                        :(!empty($libro) ? $libro->material_id
                            :(!empty($profocom) ? $profocom->material_id
                                : $tesis->material_id)); ?>;
                },
                guardarMateria() {
                    axios.post("/materiaMaterials", {
                        materia_id: this.materia_id,
                        material_id: this.material_id,
                    }).then(response => {
                        if (response.data.res) {
                            toastr.success(response.data.message);
                            this.materia_id = '';
                            this.getMaterias();
                        } else
                            toastr.error(response.data.message);
                    }).catch(e => {
                        toastr.error("Error! vuelve a intentarlo más tarde.");
                    });
                },
                getMaterias() {
                    let url = "{{ url('materiaMaterials') }}";
                    axios.get(url, {
                        params: {material_id: this.material_id}
                    }).then(response => {
                        this.materias = response.data;
                    });
                },
                eliminarMateria(id) {
                    if (confirm("Seguro que quiere eliminar este registro?")) {
                        axios.delete("/materiaMaterials/" + id).then(response => {
                            if (response.data.res) {
                                toastr.success(response.data.message);
                                this.getMaterias();
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

