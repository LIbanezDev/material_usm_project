@extends('layout.base')
@section('titulo')
    Sedes | {{ $sede->nombre }}
@endsection
@section('contenido')
    <div class="columns is-multiline">
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
                                    <a href="{{route('Carreras::getOne', $carrera->id)}}">{{$carrera->nombre}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
