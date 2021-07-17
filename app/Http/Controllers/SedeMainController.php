<?php

namespace App\Http\Controllers;

use App\Models\Sede;

class SedeMainController extends MainController
{
    function getAll(): array
    {
        $sedes = Sede::with('carreras')->get();
        return ['data' => $sedes];
    }
}
