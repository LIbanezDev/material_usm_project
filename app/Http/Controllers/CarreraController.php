<?php

namespace App\Http\Controllers;

use App\Models\Carrera;

class CarreraController extends Controller
{
    function getAll()
    {
        $carreras = Carrera::with('sedes')->get();
        return ['data' => $carreras];
    }
}
