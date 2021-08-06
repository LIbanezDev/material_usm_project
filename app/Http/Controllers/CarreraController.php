<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CarreraController extends ViewController
{
    function get(Request $request): Collection
    {
        $filtros = $request->all();
        $carreras = DB::table('carrera')
            ->join('sede_carrera', 'carrera.id', '=', 'sede_carrera.carrera_id');
        if (isset($filtros['sede'])) $carreras->where('sede_carrera.sede_id', (int)$filtros['sede']);
        return $carreras->get();
    }

    function create(Request $request): string
    {
        $data = $request->all();
        $nueva_carrera = new Carrera();
        $nueva_carrera->nombre = $data['nombre'];
        $nueva_carrera->regimen = $data['regimen'];
        $nueva_carrera->save();
        $nueva_carrera->sedes()->attach($data['sedes']);
        return 'Carrera creada';
    }
}
