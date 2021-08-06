<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignatura';

    public function carreras(): BelongsToMany
    {
        return $this->belongsToMany(Carrera::class, 'asignatura_carrera')
            ->withPivot('semestre');
    }

    public function archivos(): HasMany
    {
        return $this->hasMany(Archivo::class, 'asignatura_id');
    }

    protected $fillable = [
        'nombre',
    ];
}
