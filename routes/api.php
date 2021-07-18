<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CarreraController;
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

Route::get('carreras', [CarreraController::class, 'getAll'])->name('Carrera:getAll');
Route::post('carreras', [CarreraController::class, 'create'])->name('Carrera:create');
Route::get('sedes', [SedeController::class, 'getAll'])->name('Sede:getAll');
Route::get('archivos/{id?}', [ArchivoController::class, 'get'])->name('Archivo:get');

