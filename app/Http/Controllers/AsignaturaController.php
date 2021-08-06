<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends ViewController
{
    function get(Request $request, $id = null): Collection
    {
        $filtros = $request->all();
        $asignaturas = DB::table('asignatura')
            ->join('asignatura_carrera', 'asignatura.id', '=', 'asignatura_carrera.asignatura_id');
        if (isset($id)) $asignaturas->where('asignatura.id', $id);
        if (isset($filtros['carrera'])) {
            $asignaturas->where('asignatura_carrera.carrera_id', (int)$filtros['carrera']);
        }
        return $asignaturas->get();
    }

    function create(Request $request)
    {
        $data = $request->all();
        $asignatura = new Asignatura();
        $asignatura->nombre = $data['nombre'];
        $asignatura->save();
        $asignatura->carreras()->attach($data['carreras']);
        return response(['msg' => 'Asignatura creada con exito'], 201);
    }

    function delete($id)
    {
        try {
            Asignatura::findOrFail($id)->delete();
            return ['msg' => 'Registro eliminado exitosamente'];
        } catch (Exception $exception) {
            return response(['msg' => 'Registro no encontrado'], 404);
        }
    }

    function udpdate($id, Request $request)
    {
        try {
            Asignatura::findOrFail($id)->update($request->all());
            return ['msg' => 'Registro actualizado exitosamente'];
        } catch (Exception $exception) {
            return response(['msg' => 'Registro no encontrado'], 404);
        }
    }
}
