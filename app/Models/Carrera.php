<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carrera';

    public function sedes(): BelongsToMany
    {
        return $this->belongsToMany(Sede::class, 'sede_carrera');
    }

    public function asignaturas(): BelongsToMany
    {
        return $this->belongsToMany(Asignatura::class, 'asignatura_carrera')->withPivot('semestre');
    }

    protected $fillable = [
        'nombre',
        'regimen',
    ];

}
