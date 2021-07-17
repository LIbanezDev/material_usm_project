<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sede extends Model
{
    use HasFactory;

    protected $table = 'sede';

    public function carreras(): BelongsToMany
    {
        return $this->belongsToMany(Carrera::class, 'sede_carrera');
    }

    protected $fillable = [
        'nombre',
        'ciudad',
    ];
}