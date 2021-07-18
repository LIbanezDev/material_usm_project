@extends('layout.base')
@section('titulo')
    Asignatura | {{ $asignatura->nombre }}
@endsection
@section('contenido')
    <div class="columns">
        <div class="column is-4-desktop is-12-mobile">
            <h2> {{$filters['ok']}}</h2>
            <form id="filter-form">
                @foreach($tipos_archivo as $tipo)
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" id="{{$tipo->nombre}}">
                                {{ $tipo->nombre }}es ({{$tipo->cantidad}})
                            </label>
                        </div>
                    </div>
                @endforeach
                <button class="button is-info" type="submit"> Filtrar</button>
            </form>
            <pre id="test"> {{$tipos_archivo}} </pre>
        </div>
        <div class="column">
            <div class="columns is-multiline">
                <div class="column is-12">
                    <h2> Archivos de {{ $asignatura->nombre }}</h2>
                </div>
                @foreach($asignatura->archivos as $archivo)
                    <div class="column is-3-desktop is-4-tablet is-6-mobile">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img
                                                src="{{ asset('assets/icons/'.substr($archivo->nombre, strrpos($archivo->nombre, '.') + 1).'.svg')}}"
                                                alt="file_format">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-6">
                                            <a href="{{asset('material/'.$archivo->nombre)}}"
                                               target="_blank"
                                               download="{{$archivo->nombre}}">
                                                {{$archivo->nombre}}
                                            </a>
                                        </p>
                                        <p class="subtitle is-6">@johnsmith</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    document.getElementById('filter-form').addEventListener('submit', (evt) => {
    evt.preventDefault();
    let filtros = '';
    if(document.getElementById('Certamen').checked) filtros += 'certamen'
    if(document.getElementById('Control').checked) filtros += 'control'
    alert(filtros)
    })
    document.getElementById('test').innerText =
    JSON.stringify(JSON.parse(document.getElementById('test').textContent), null, 4)
@endsection
