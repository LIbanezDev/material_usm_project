<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/contribuir', [MainController::class, 'contribuir'])->name('Contribuir');
Route::get('/about', function () {
    return view('static.about');
})->name('Static::about');
Route::get('/contacto', function () {
    return view('static.contact');
})->name('Static::contact');



Route::get('/login', function () {
    return view('auth.login');
})->name('Auth::login');
Route::get('/register', function () {
    return view('auth.register');
})->name('Auth::register');


Route::get('/carreras/{id_carrera}', [MainController::class, 'carreras'])->name('Carreras::getOne');
Route::get('/carreras/{id_carrera}/asignatura/{id_asignatura}', [MainController::class, 'asignatura'])->name('Asignatura::archivos');
Route::get('/sedes/{id_sede}', [MainController::class, 'sede'])->name('Sede::getOne');
