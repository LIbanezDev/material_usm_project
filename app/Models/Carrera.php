<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carrera';

    public function sedes(): BelongsToMany
    {
        return $this->belongsToMany(Sede::class, 'sede_carrera');
    }

    protected $fillable = [
        'nombre',
        'regimen',
    ];

}
