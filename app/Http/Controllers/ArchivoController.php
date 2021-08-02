<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Asignatura;
use App\Models\TipoArchivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArchivoController extends Controller
{
    private $allowedExtensions = ['pdf', 'docx', 'jpg', 'jpeg', 'png', 'doc', 'xlsx'];

    public function create(Request $request)
    {
        $params = $request->all();
        $file_extension = $request->file->getClientOriginalExtension();
        if (!in_array($file_extension, $this->allowedExtensions))
            return response()->json(['data' => 'La extension no esta permitida'], 400);

        $asignatura = Asignatura::find((int)$params['asignatura']);
        $tipo_archivo = TipoArchivo::find((int)$params['tipo']);
        $generated_new_name =
            $tipo_archivo->nombre . '-' . $asignatura->nombre . '-' . time() . '.' . $file_extension;
        $upload_path = public_path('material');
        $request->file->move($upload_path, $generated_new_name);

        $archivo = new Archivo();
        $archivo->nombre = $generated_new_name;
        $archivo->asignatura()->associate($asignatura);
        $archivo->tipo()->associate($tipo_archivo);
        $archivo->save();
        return response('Archivo subido exitosamente', 201);
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
        return $archivos->orderBy('created_at', 'desc')->get();
    }

    function delete($id)
    {
        try {
            $archivo = Archivo::findOrFail($id);
            $full_path = 'material/' . $archivo->nombre;
            File::delete($full_path);
            $archivo->delete();
            return 'Archivo eliminado';
        } catch (\Exception $exception) {
            return response('Archivo no encontrado', 404);
        }
    }
}
