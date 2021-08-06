<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\SedeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Sedes
Route::get('sedes', [SedeController::class, 'get']);

// Carreras
Route::get('carreras', [CarreraController::class, 'get']);
Route::post('carreras', [CarreraController::class, 'create']);


// Asignaturas
Route::post('asignaturas', [AsignaturaController::class, 'create']);
Route::get('asignaturas/{id?}', [AsignaturaController::class, 'get']);
Route::delete('asignaturas/{id}', [AsignaturaController::class, 'delete']);
Route::patch('asignaturas/{id}', [AsignaturaController::class, 'udpdate']);

// Archivos
Route::post('archivos', [ArchivoController::class, 'create']);
Route::get('archivos/{id?}', [ArchivoController::class, 'get']);
Route::delete('archivos/{id}', [ArchivoController::class, 'delete']);

