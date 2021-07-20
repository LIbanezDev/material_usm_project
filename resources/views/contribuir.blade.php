@extends('layout.base')
@section('titulo')
    Material USM | Contribuir
@endsection
@section('contenido')
    <div class="columns is-multiline">
        <div class="column">
            <form id="formAgregarArchivo">
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
                        </span>
                    </label>
                </div>
                <button class="button is-success"> Subir</button>
            </form>
        </div>
    </div>
@endsection
@section('javascript')
    document.getElementById('formAgregarArchivo').addEventListener('submit', async (evt) => {
    evt.preventDefault();
    const url = 'api/archivos';
    const formData = new FormData();
    const archivo = document.getElementById('archivo-input').files[0];
    formData.append('file', archivo)
    const config = {
    headers: {
    'content-type': 'multipart/form-data'
    }
    }
    const res = await axios.post(url, formData,config)
    console.log(res.data)
    })
@endsection

