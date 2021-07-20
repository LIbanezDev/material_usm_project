<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $table = 'archivo';

    function tipo() {
        return $this->belongsTo(TipoArchivo::class, 'tipo_id');
    }

    function asignatura() {
        return $this->belongsTo(Asignatura::class, 'asignatura_id');
    }
}
