<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends MainController
{
    public function storeArchivo(Request $request)
    {
        $upload_path = public_path('material');
        $file_name = $request->file->getClientOriginalName();
        $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move($upload_path, $generated_new_name);
        return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);
    }

    function get(Request $request, $id = null): array
    {
        $filters = $request->all();
        $archivos = Archivo::with('tipo');

        if (isset($id)) {
            $archivos->find($id);
        } else {
            if (isset($filters['tipo'])) $archivos->where('tipo_id', (int)$filters['tipo']);
            if (isset($filters['asignatura'])) $archivos->where('asignatura_id', (int)$filters['asignatura']);
            if (isset($filters['usuario_id'])) $archivos->where('usuario_id', (int)$filters['usuario_id']);
        }
        return ['data' => $archivos->orderBy('created_at', 'desc')->get()];
    }
}
