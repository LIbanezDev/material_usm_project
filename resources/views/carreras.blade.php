@extends('layout.base')
@section('titulo')
    Sedes | {{ $sede->nombre }}
@endsection
@section('contenido')
    <div class="columns is-multiline">
        <div class="column is-12">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{route('Sede::getAll')}}">Sedes</a></li>
                    <li class="is-active"><a href="#" aria-current="page">{{$sede->nombre}}</a></li>
                </ul>
            </nav>
        </div>
        <div class="column is-12">
            <h1 class="title has-text-centered"> Carreras de {{ $sede->nombre }}</h1>
        </div>
        @foreach($sede->carreras as $carrera)
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">
                                    <a href="{{route('Carreras::getOne', ['id_sede' => $sede->id, 'id_carrera' => $carrera->id])}}">{{$carrera->nombre}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
