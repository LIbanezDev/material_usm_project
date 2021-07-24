@extends('layout.base')
@section('titulo')
    Asignaturas | {{ $carrera->nombre }}
@endsection
@section('contenido')
    <div class="columns is-multiline">
        <div class="column is-12">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{route('Sede::getAll')}}">Sedes</a></li>
                    <li><a href="{{route('Sede::getOne', $sede->id)}}">{{ $sede->nombre }}</a></li>
                    <li class="is-active"><a href="#" aria-current="page">{{$carrera->nombre}}</a></li>
                </ul>
            </nav>
        </div>
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
                                    <a href="{{route('Asignatura::archivos',
                                        [
                                            'id_sede' => request()->route('id_sede'),
                                            'id_carrera' => request()->route('id_carrera'),
                                            'id_asignatura' => $asignatura->id,
                                        ]
                                        )}}">{{$asignatura->nombre}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
