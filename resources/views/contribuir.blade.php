@extends('layout.base')
@section('titulo')
    Material USM | Contribuir
@endsection
@section('contenido')
    <div class="columns is-multiline">
        <div class="column is-half is-offset-one-quarter box">
            <h2 class="title"> Subir archivo </h2>
            <form id="formAgregarArchivo">
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
                <button class="button is-success"> Subir</button>
            </form>
        </div>
    </div>
@endsection
@section('javascript')
    const DEFAULT_OPTION = `
    <option selected disabled> Selecciona una opción</option>`
    const fileNameSpan = document.getElementById('file-name');
    const sedeSelect = document.getElementById('input-sede');
    const carreraSelect = document.getElementById('input-carrera');
    const asignaturaSelect = document.getElementById('input-asignatura');
    const tipoArchivoSelect = document.getElementById('input-tipo_archivo');

    sedeSelect.addEventListener('change', async () => {
    carreraSelect.disabled = true;
    carreraSelect.innerHTML = DEFAULT_OPTION;
    asignaturaSelect.innerHTML = DEFAULT_OPTION;
    const url = `/api/carreras?sede=${sedeSelect.value}`
    const {data} = await axios.get(url)
    data.forEach((carrera) => {
    carreraSelect.innerHTML += `
    <option value="${carrera.id}"> ${carrera.nombre}</option>`
    })
    carreraSelect.disabled = false;
    })

    carreraSelect.addEventListener('change', async() => {
    asignaturaSelect.disabled = true;
    asignaturaSelect.innerHTML = DEFAULT_OPTION;
    const url = `/api/asignaturas?carrera=${carreraSelect.value}`
    const {data} = await axios.get(url)
    data.forEach(asignatura => {
    asignaturaSelect.innerHTML += `
    <option value="${asignatura.id}"> ${asignatura.nombre}</option>`
    })
    asignaturaSelect.disabled = false;
    })

    fileNameSpan.classList.remove('is-hidden');
    fileNameSpan.classList.add('file-name');
    document.getElementById('archivo-input').addEventListener('change', () => {
    fileNameSpan.innerText = document.getElementById('archivo-input').files[0].name
    })

    document.getElementById('formAgregarArchivo').addEventListener('submit', async (evt) => {
    evt.preventDefault();
    const url = 'api/archivos';
    const formData = new FormData();
    const archivo = document.getElementById('archivo-input').files[0];
    formData.append('file', archivo)
    formData.append('asignatura', asignaturaSelect.value)
    formData.append('tipo', tipoArchivoSelect.value)
    const config = {
    headers: {
    'content-type': 'multipart/form-data'
    }
    }
    const res = await axios.post(url, formData, config)
    console.log(res.data)
    })
@endsection

