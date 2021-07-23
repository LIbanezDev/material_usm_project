@extends('layout.base')
@section('titulo')
    Material USM | Contribuir
@endsection
@section('contenido')
    <div class="columns is-multiline is-centered">
        {{--<div class="column is-4-desktop is-12-tablet is-12-mobile box">
            <h2 class="title has-text-centered"> Carrera </h2>
            <form id="form-agregar-archivo">
                <div class="field">
                    <label class="label" for="input-sede">Sede</label>
                    <div class="control">
                        <div class="select">
                            <select id="input-sede-carrera">
                                <option selected disabled> Selecciona una opción</option>
                                @foreach($sedes as $sede)
                                    <option value="{{$sede->id}}">{{$sede->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button class="button is-success"> Subir</button>
            </form>
        </div>
        <div class="column is-4-desktop is-12-tablet box">
            <h2 class="title has-text-centered"> Asignatura </h2>
            <form id="form-agregar-asignatura">
                <div class="field">
                    <label class="label" for="input-sede">Sede</label>
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
                <button class="button is-success"> Subir</button>
            </form>
        </div>--}}
        <div class="column is-4">
            <h2 class="title"> Archivo </h2>
            <form id="form-agregar-archivo">
                <div class="field">
                    <label class="label" for="input-sede">Sede</label>
                    <div class="control">
                        <div class="select">
                            <select id="input-sede-archivo">
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
                <button class="button is-success" type="submit"> Subir</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/contribuir.js')}}"></script>
@endsection

