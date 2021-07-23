<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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


Route::get('/', [Controller::class, 'index']);

Route::get('/contribuir', [Controller::class, 'contribuir'])->name('Contribuir');
Route::get('/about', function () {
    return view('static.about');
})->name('Static::about');
Route::get('/contacto', function () {
    return view('static.contact');
})->name('Static::contact');



Route::get('/login', function () {
    return view('auth.login');
})->name('Auth::login')->middleware('guest');
Route::get('/register', function () {
    return view('auth.register');
})->name('Auth::register')->middleware('guest');

Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::post('register', [AuthController::class, 'register'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('token', function () {
    return csrf_token();
});

Route::get('/carreras/{id_carrera}', [Controller::class, 'carreras'])->name('Carreras::getOne');
Route::get('/carreras/{id_carrera}/asignatura/{id_asignatura}', [Controller::class, 'asignatura'])->name('Asignatura::archivos');
Route::get('/sedes/{id_sede}', [Controller::class, 'sede'])->name('Sede::getOne');
