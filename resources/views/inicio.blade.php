@extends('layout.base')
@section('titulo')
    Material USM
@endsection
@section('contenido')
    <div class="columns is-multiline">
        <div class="column is-12 has-text-centered">
            <h1 class="title"> Bienvenido a Material USM </h1>
            <h2 class="subtitle"> Selecciona tu sede </h2>
        </div>
        @foreach($sedes as $sede)
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
                <a href="{{route('Sede::getOne', $sede->id)}}">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('assets/usm/sedes/'.$sede->imagen)}}"
                                     alt="Imagen sede {{$sede->nombre}}">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">{{$sede->nombre}}</p>
                                    <p class="subtitle is-6">#{{$sede->direccion}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
