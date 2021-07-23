<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    function getAll(Request $request)
    {
        $filtros = $request->all();
        $carreras = DB::table('carrera')
            ->join('sede_carrera', 'carrera.id', '=', 'sede_carrera.carrera_id');
        if(isset($filtros['sede'])) {
            $carreras->where('sede_carrera.sede_id', (int) $filtros['sede']);
        }
        return $carreras->get();
    }

    function create(Request $request)
    {
        $data = $request->all();
        return $data;
    }
}
