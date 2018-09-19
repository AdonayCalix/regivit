<br>
<div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Ya has llenado este formulario, no puedes editarlo nuevamente</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="card animated fadeIn">
    <div id="capture">
        @foreach($personal_datas as $personal_data)

            <div class="card-header">
                <strong>REG-RH.120 Ficha de datos personales
                </strong>
            </div>
            <div class="card-body">
                <!-- PORTADA DE REG-R.120-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-1 align-content-center align-items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/UNICAH_logo.png"
                             width="150" height="150"
                             alt="">
                    </div>
                    <div class="col-md-6 text-center font-weight-bold">
                        <br><h5>UNIVERSIDAD CATÓLICA DE HONDURAS</h5>
                        <h5>"NUESTRA SEÑORA REINA DE LA PAZ"</h5>
                        <br>
                        <h5>FICHA DE DATOS PERSONALES</h5>
                    </div>

                </div>
                <br>

                <div class="card-header"><br></div>
                <!-- Formulario -->
                <form action="#" method="post" id="formulario">
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <!-- ENCABEZADO-->
                    <br><br>
                    @foreach($values as $value)
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Puesto actual

                                </label>
                                <input type="text" name="current_position" class="form-control"
                                       value="{{$personal_data->current_position}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Primer Nombre

                                </label>
                                <input type="text" name="first_name" class="form-control"
                                       value="{{auth()->user()->first_name}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Segundo Nombre

                                </label>
                                <input type="text" name="second_name" class="form-control"
                                       placeholder="Ingrese su segundo nombre"
                                       value="{{auth()->user()->second_name}}">
                            </div>
                        </div>
                        <!-- Bloque -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Primer Apellido

                                </label>
                                <input type="text" name="first_surname" class="form-control"
                                       placeholder="Ingrese su primer apellido"
                                       value="{{auth()->user()->first_surname}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Segundo Apellido

                                </label>
                                <input type="text" name="second_surname" class="form-control"
                                       placeholder="Ingrese su segundo apellido"
                                       value="{{auth()->user()->second_surname}}">
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Estado Civil

                                </label>
                                <select class="form-control formulario" name="civil_status">
                                    <option value="Una burrada">{{$value['civil_status']}}</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="">Identidad

                                </label>
                                <input type="text" name="identity" class="form-control"
                                       value="{{auth()->user()->identity}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Fecha de Nacimiento

                                </label>
                                <input type="date" name="birthdate" class="form-control"
                                       value="{{$value['birthdate']}}">
                            </div>
                        </div>

                        <!-- Bloque -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Dirección actual

                                </label>
                                <input type="text" name="address" class="form-control"
                                       value="{{$value['address']}}">
                            </div>
                            <div class="form-group col">
                                <label for="">E-mail

                                </label>
                                <input type="text" name="email" class="form-control"
                                       value="{{auth()->user()->email}}">
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Telefono casa

                                </label>
                                <input type="text" class="form-control" name="number_home"
                                       value="{{$personal_data->telefono_casa}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Telefono oficina

                                </label>
                                <input type="text" class="form-control" name="number_office"
                                       value="{{$personal_data->telefono_oficina}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Telefono otros

                                </label>
                                <input type="text" class="form-control" name="number_others"
                                       value="{{$personal_data->telefono_otro}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Nacionalidad

                                </label>
                                <select class="form-control formulario" name="nacionalidad">
                                    <option>{{$value['nationality']}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($degree_education as $degrees)
                                @if($degrees->level == 'Primaria')
                                    <div class="form-group col">
                                        <label for="">Grado Académico Primaria

                                        </label>
                                        <input type="text" name="primary_education" class="form-control"
                                               value="{{$degrees->degree}}">
                                    </div>
                                @endif
                                @if($degrees->level == 'Secundaria')
                                    <div class="form-group col">
                                        <label for="">Grado Académico Secundaria

                                        </label>
                                        <input type="text" name="high_school_education" class="form-control"
                                               value="{{$degrees->degree}}">
                                    </div>
                                @endif
                                @if($degrees->level == 'Universitaria')
                                    <div class="form-group col">
                                        <label for="">Académimco Universitaria

                                        </label>
                                        <input type="text" name="university_education" class="form-control"
                                               value="{{$degrees->degree}}">
                                    </div>
                                @endif
                            @endforeach
                            <div class="form-group col">
                                <label for="">Grado Académico Postgrado

                                </label>
                                <input type="text" name="postgrade_education" class="form-control"
                                       value="{{$personal_data->postgrado}}">
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">IHSS</label>
                                <input type="text" class="form-control" name="ihss"
                                       value="{{$value['ihss']}}">
                            </div>
                            <div class="form-group col">
                                <label for="">RAP/FOSOVI</label>
                                <input type="text" class="form-control" name="rap_fosovi"
                                       value="{{$value['rap']}}">
                            </div>
                            <div class="form-group col">
                                <label for="">N° de Colegio Profesional</label>
                                <input type="text" class="form-control" name="personal_school_number"
                                       value="{{$personal_data->personal_school_number}}">
                            </div>
                            <div class="form-group col">
                                <label for="">N° Licencia de Conducir</label>
                                <input type="text" class="form-control" name="driver_license"
                                       value="{{$personal_data->driver_license}}">
                            </div>
                        </div>
                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Carnet de trabajo</label>
                                <input type="text" class="form-control" name="job_card"
                                       value="{{$personal_data->job_card}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Fecha de ingreso</label>
                                <input type="date" class="form-control" name="admission_date"
                                       value="{{$personal_data->admission_date}}">
                            </div>
                            <div class="form-group col">
                                <label for="">N° cuenta BAMER</label>
                                <input type="text" class="form-control" name="  "
                                       value="{{$personal_data->bamer_account_numer}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Campus que labora

                                </label>
                                <select class="form-control formulario" name="campus_id">
                                    <option value="">[Seleccione]</option>
                                    @foreach($campus as $campu)
                                        <option value="{{$campu->id}}">{{$campu->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Posee movil</label>
                                <select class="form-control formulario" id="has_car" name="has_car">
                                    @if($personal_data->vehiculo == 1)
                                        <option value="">Si</option>
                                    @else
                                        <option value="">No</option>
                                    @endif
                                </select>

                            </div>
                            <div class="form-group col">
                                <label for="">Marca</label>
                                <input type="text" class="form-control car" name="marca"
                                       value="{{$personal_data->marca_vehiculo}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Modelo</label>
                                <input type="text" class="form-control car" name="modelo"
                                       value="{{$personal_data->modelo_vehiculo}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Año</label>
                                <input type="text" class="form-control car" name="anio"
                                       value="{{$personal_data->anio_vehiculo}}">
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Nombre de Conyuge</label>
                                <input type="text" class="form-control" name="spouse_name"
                                       value="{{$personal_data->spouse_name}}">
                            </div>
                            <div class="form-group col">
                                <label for="">En caso de emergencia avisar a

                                </label>
                                <input type="text" class="form-control" name="emergency"
                                       value="{{$personal_data->emergency}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Telefono de la persona a avisar

                                </label>
                                <input type="text" class="form-control" name="emergency_number"
                                       value="{{$personal_data->emergency_number}}">
                            </div>
                        </div>
                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Parroquia a la que asiste

                                </label>
                                <input type="text" class="form-control" name="parish"
                                       value="{{$value['parish']}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Nombre del Párroco

                                </label>
                                <input type="text" class="form-control" name="priest"
                                       value="{{$value['priest']}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Movimiento Cristiano

                                </label>
                                <input type="text" class="form-control" name="catholic_movement"
                                       value="{{$value['catholic_movement']}}">
                            </div>
                        </div>

                        <!-- BLOQUE -->
                        <table class="table table-condensed table-bordered">
                            <thead class="card-header text-center">
                            <tr>
                                <th>Nombre</th>
                                <th>Parentesco</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dependents as $dependent)
                                <tr>
                                    <td><input type="text" name="nombre_parenteso[]" class="form-control"
                                               value="{{{$dependent->name}}}"></td>
                                    <td><input type="text" name="tipo_parentesco[]" class="form-control"
                                               value="{{$dependent->relationship}}"></td>
                                    <td><input type="date" name="fecha_nacimiento_parentesco[]"
                                               class="form-control" value="{{$dependent->birthdate}}">
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <br>

                        </table>

                        <!-- BLOQUE -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="" data-toggle="modal" data-target="#modal_firma">Firma
                                </label><br>
                                <div class="form-control align-content-center" id="contenedor_firma" style="height: 100px">
                                    <img src="{{asset('/uploades/' . $personal_data->signature_path)}}" alt="" id="img-firma"
                                         width="100%" height="100%">
                                </div>
                            </div>
                            <div class="form-group col">
                                <label for="">Fecha

                                </label>
                                <input type="text" class="form-control" name="current_date"
                                       value="{{\Carbon\Carbon::now()->format('d-m-Y')}}"
                                       placeholder="{{\Carbon\Carbon::now()->format('d-m-Y')}}">
                            </div>
                        </div>
                        @break
                    @endforeach
                </form>
            </div>
    </div>
    <div class="card-body">
        <button class="btn btn-success float-right">
            Descargar <i class="fas fa-download"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</div>
@endforeach
