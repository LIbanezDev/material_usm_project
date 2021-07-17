<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class ArchivoMainController extends MainController
{
    function get(Request $request, $id = null): array
    {
        $filters = $request->all();
        $archivos = Archivo::with('tipo');

        if (isset($id)) {
            $archivos->find($id);
        } else {
            if (isset($filters['tipo'])) $archivos->where('tipo_id', (int)$filters['tipo']);
            if (isset($filters['asignatura'])) $archivos->where('asignatura_id', (int)$filters['asignatura']);
            if (isset($filters['usuario_id'])) $archivos->where('usuario_id', (int) $filters['usuario_id']);
        }
        return ['data' => $archivos->orderBy('created_at', 'desc')->get()];
    }
}
