<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignatura';

    public function carreras(): BelongsToMany
    {
        return $this->belongsToMany(Carrera::class, 'asignatura_carrera')->withPivot('semestre');
    }

    protected $fillable = [
        'nombre',
    ];
}
