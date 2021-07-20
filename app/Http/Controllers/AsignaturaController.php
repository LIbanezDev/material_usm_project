<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    function getAll(Request $request)
    {
        $filtros = $request->all();
        $asignaturas = DB::table('asignatura')
            ->join('asignatura_carrera', 'asignatura.id', '=', 'asignatura_carrera.asignatura_id');
        if(isset($filtros['carrera'])) {
            $asignaturas->where('asignatura_carrera.carrera_id', (int) $filtros['carrera']);
        }
        return $asignaturas->get();
    }
}
