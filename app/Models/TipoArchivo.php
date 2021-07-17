<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoArchivo extends Model
{
    use HasFactory;

    protected $table = 'tipo_archivo';

    function archivos(): HasMany
    {
        return $this->hasMany(Archivo::class, 'tipo_id');
    }

    protected $fillable = [
        'nombre',
        'puntaje',
    ];

}
