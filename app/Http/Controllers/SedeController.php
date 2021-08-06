<?php

namespace App\Http\Controllers;

use App\Models\Sede;

class SedeController extends ViewController
{
    function get(): array
    {
        $sedes = Sede::with('carreras')->get();
        return ['data' => $sedes];
    }
}
