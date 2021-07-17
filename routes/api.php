<?php

use App\Http\Controllers\ArchivoMainController;
use App\Http\Controllers\CarreraMainController;
use App\Http\Controllers\SedeMainController;
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

Route::get('carreras', [CarreraMainController::class, 'getAll'])->name('Carrera:getAll');
Route::post('carreras', [CarreraMainController::class, 'create'])->name('Carrera:create');
Route::get('sedes', [SedeMainController::class, 'getAll'])->name('Sede:getAll');
Route::get('archivos/{id?}', [ArchivoMainController::class, 'get'])->name('Archivo:get');

