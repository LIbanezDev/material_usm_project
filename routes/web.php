<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
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

// Base routes
Route::redirect('/', 'sedes');
Route::view('/about', 'static.about')->name('Static::about');
Route::view('/contacto', 'static.contact')->name('Static::contact');
Route::get('/contribuir/{type?}', [ViewController::class, 'contribuir'])->name('Contribuir');


// Auth
Route::view('/login', 'auth.login')->name('Auth::login')->middleware('guest');
Route::view('/register', 'auth.register')->name('Auth::register')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::post('register', [AuthController::class, 'register'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');

// Postman testing
Route::get('token', function () {
    return csrf_token();
});

// Sedes
Route::get('sedes', [ViewController::class, 'sedes'])->name('Sede::getAll');

// Carreras
Route::get('sedes/{id_sede}/carreras', [ViewController::class, 'carreras'])->name('Sede::getOne');

// Asignaturas
Route::get('sedes/{id_sede}/carreras/{id_carrera}/asignaturas', [ViewController::class, 'asignaturas'])->name('Carreras::getOne');

// Archivos
Route::get('sedes/{id_sede}/carreras/{id_carrera}/asignaturas/{id_asignatura}/archivos', [ViewController::class, 'archivos'])->name('Asignatura::archivos');
