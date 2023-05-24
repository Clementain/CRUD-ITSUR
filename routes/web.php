<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AlumnoController::class, 'index']);
Route::get('/alumnos/agregar', [AlumnoController::class, 'agregar'])->name('alumnos.agregar');
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::resource('/alumnos', AlumnoController::class);
