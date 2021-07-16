<?php

namespace App\Http\Controllers;

use App\Models\Sede;

class SedeController extends Controller
{
    function getAll(): array
    {
        $sedes = Sede::with('carreras')->get();
        return ['data' => $sedes];
    }
}
