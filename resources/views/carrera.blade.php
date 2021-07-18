@extends('layout.base')
@section('titulo')
    Asignaturas | {{ $carrera->nombre }}
@endsection
@section('contenido')
    <div class="columns">
        <div class="column">
            <div class="columns is-multiline">
                <div class="column is-12">
                    <h1 class="title has-text-centered"> Asignaturas de {{ $carrera->nombre }}</h1>
                </div>
                @foreach($carrera->asignaturas as $asignatura)
                    <div class="column is-4-desktop is-6-tablet is-12-mobile">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            <a href="{{route('Asignatura::archivos', ['id_carrera' => $carrera->id, 'id_asignatura' => $asignatura->id])}}">{{$asignatura->nombre}}</a>
                                        </p>
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
