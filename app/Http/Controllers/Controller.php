<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\TipoArchivo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sedes()
    {
        $sedes = Sede::all();
        return view('sedes', compact('sedes'));
    }

    public function carreras($id_sede)
    {
        $sede = Sede::with('carreras')->findOrFail($id_sede);
        return view('carreras', compact('sede'));
    }

    public function asignaturas($id_sede, $id_carrera)
    {
        $carrera = Carrera::with('asignaturas')->findOrFail($id_carrera);
        $sede = Sede::find($id_sede);
        return view('asignaturas', compact('carrera', 'sede'));
    }

    public function archivos($id_sede, $id_carrera, $id_asignatura, Request $request)
    {
        $filters = $request->all();
        $asignatura = Asignatura::with('archivos')->findOrFail($id_asignatura);
        $sede = Sede::find($id_sede);
        $carrera = Carrera::find($id_carrera);

        if (isset($filters['evaluaciones'])) {
            if ($filters['evaluaciones'] != '') {
                // TODO: implementar filtros
            }
        }
        $tipos_archivo = DB::table('tipo_archivo')
            ->selectRaw('tipo_archivo.id as id, tipo_archivo.nombre, count(archivo.id) as cantidad')
            ->join('archivo', 'tipo_archivo.id', '=', 'archivo.tipo_id')
            ->where('archivo.asignatura_id', $id_asignatura)
            ->groupBy('tipo_archivo.id')->get();
        return view('archivos', compact('asignatura', 'tipos_archivo', 'filters', 'sede', 'carrera'));
    }

    public function contribuir()
    {
        $sedes = Sede::all();
        $tipos_archivo = TipoArchivo::all();
        return view('contribuir', compact('sedes', 'tipos_archivo'));
    }
}
