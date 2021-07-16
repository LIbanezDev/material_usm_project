<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Sede;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $sedes = Sede::with('carreras')->get();
        $carreras = Carrera::with('sedes')->get();
        return view('welcome', compact('sedes', 'carreras'));
    }
}
