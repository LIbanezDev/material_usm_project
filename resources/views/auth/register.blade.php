@extends('layout.base')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <div class="columns">
        <div class="column">
            <aside class="menu">
                <p class="menu-label">
                    Sedes
                </p>
                <ul class="menu-list">
                    @foreach($sedes as $sede)
                        <li>
                            <a>{{$sede->nombre}}</a>
                            @if($sede->carreras)
                                <ul>
                                    @foreach($sede->carreras as $carrera)
                                        <li><a>{{$carrera->nombre}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
        <div class="column">
            <p class="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid dolores enim error facere, fugiat
                iusto magnam nesciunt nulla perferendis, qui rem sequi sunt. Deserunt, enim eveniet ipsam maxime
                molestiae nam, natus odio omnis placeat possimus repudiandae rerum suscipit vel.
            </p>
        </div>
    </div>
@endsection
