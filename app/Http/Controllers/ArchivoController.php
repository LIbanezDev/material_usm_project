<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Asignatura;
use App\Models\TipoArchivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function storeArchivo(Request $request)
    {
        $params = $request->all();
        $asignatura = Asignatura::find((int)$params['asignatura']);
        $tipo_archivo = TipoArchivo::find((int)$params['tipo']);
        $generated_new_name =
            $tipo_archivo->nombre . '-' . $asignatura->nombre . '-' . time() . '.' .
            $request->file->getClientOriginalExtension();
        $upload_path = public_path('material');
        $request->file->move($upload_path, $generated_new_name);

        $archivo = new Archivo();
        $archivo->nombre = $generated_new_name;
        $archivo->asignatura()->associate($asignatura);
        $archivo->tipo()->associate($tipo_archivo);
        $archivo->save();
        return response()->json(['success' => 'You have successfully uploaded "' . $generated_new_name . '"'], 201);
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
