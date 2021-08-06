@extends('layout.base')
@section('titulo')
    Material USM | Contribuir
@endsection
@section('contenido')
    <div class="columns">
        <div class="column">
            <div class="tabs is-centered is-boxed">
                <ul>
                    <li id="tab-archivo">
                        <a>
                            <span class="icon is-small">
                                <i class="fas fa-file-alt" aria-hidden="true"></i>
                            </span>
                            Archivo
                        </a>
                    </li>
                    <li id="tab-asignatura">
                        <a>
                            <span class="icon is-small">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                            Asignatura
                        </a>
                    </li>
                    <li id="tab-carrera"><a>
                            <span class="icon is-small">
                                <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                            </span>
                            Carrera
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="columns is-centered">
        <form class="column is-6 animate__animated animate__fadeIn is-hidden" id="form-agregar-archivo">
            <div class="field">
                <label class="label" for="input-sede">Sede</label>
                <div class="control">
                    <div class="select">
                        <select id="input-sede">
                            <option selected disabled> Selecciona una opción</option>
                            @foreach($sedes as $sede)
                                <option value="{{$sede->id}}">{{$sede->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label" for="input-carrera">Carrera</label>
                <div class="control">
                    <div class="select">
                        <select id="input-carrera" disabled>
                            <option selected disabled> Selecciona una opción</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label" for="input-asignatura">Asignatura</label>
                <div class="control">
                    <div class="select">
                        <select id="input-asignatura" disabled>
                            <option selected disabled> Selecciona una opción</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label" for="input-tipo_archivo">Tipo de archivo</label>
                <div class="control">
                    <div class="select">
                        <select id="input-tipo_archivo">
                            <option selected disabled> Selecciona una opción</option>
                            @foreach($tipos_archivo as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="file">
                    <label class="file-label">
                        <input class="file-input" type="file" name="archivo" id="archivo-input">
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            Selecciona un archivo…
                          </span>
                            <span id="file-name" class="is-hidden">
                            </span>
                        </span>
                    </label>
                </div>
            </div>
            <button class="button is-success" type="submit" id="btn-subir-archivo"> Subir archivo</button>
        </form>
        <form class="column is-6 is-hidden animate__animated animate__fadeIn" id="form-agregar-asignatura">
            <div class="field">
                <label class="label" for="input-sede-asignatura">Sede</label>
                <div class="control">
                    <div class="select">
                        <select id="input-sede-asignatura">
                            <option selected disabled> Selecciona una opción</option>
                            @foreach($sedes as $sede)
                                <option value="{{$sede->id}}">{{$sede->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label" for="input-asignatura-carrera">Carrera</label>
                <div class="control">
                    <div class="select">
                        <select id="input-asignatura" disabled>
                            <option selected disabled> Selecciona una opción</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label" for="input-asignatura-asignatura">Nombre de asignatura</label>
                <div class="control">
                    <input id="input-asignatura-asignatura" class="input" type="text">
                </div>
            </div>
            <button class="button is-success"> Agregar asignatura</button>
        </form>
        <form class="column is-6 is-hidden animate__animated animate__fadeIn" id="form-agregar-carrera">
            <div class="field">
                <label class="label" for="input-carrera-sede">Sedes</label>
                @foreach($sedes as $sede)
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="sedes[]" value="{{$sede->id}}">
                            {{$sede->nombre}}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="field has-addons">
                <p class="control">
                    <label for="select-tipo-carrera" class="label">Tipo de Carrera</label>
                    <span class="select">
                        <select id="select-tipo-carrera">
                        <option value="" selected>  </option>
                        <option value="Ingenieria Civil"> Ingenieria Civil </option>
                        <option value="Ingenieria"> Ingenieria </option>
                        <option value="Licenciatura"> Licenciatura </option>
                        <option value="Tecnico Universitario"> Tecnico Universitario </option>
                        </select>
                    </span>
                </p>
                <p class="control is-expanded">
                    <label for="input-carrera-carrera" class="label">Especialidad</label>
                    <input id="input-carrera-carrera"
                           class="input" type="text"
                           placeholder="Informática, Química, Minas, ....">
                </p>
            </div>
            <div class="field">
                <label class="label" for="input-carrera-regimen">Regímen</label>
                <div class="control">
                    <div class="select">
                        <select id="input-carrera-regimen">
                            <option value="D" selected> Diurno</option>
                            <option value="V"> Vespertino</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="button is-success" id="btn-agregar-carrera"> Agregar Carrera</button>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/contribuir.js')}}"></script>
@endsection

