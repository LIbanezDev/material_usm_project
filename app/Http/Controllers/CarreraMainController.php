<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraMainController extends MainController
{
    function getAll()
    {
        $carreras = Carrera::with('sedes')->get();
        return ['data' => $carreras];
    }

    function create(Request $request)
    {
        $data = $request->all();
        return $data;
    }
}
