<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
// return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/estudiantes/ingreso', [App\Http\Controllers\EstudiantesController::class, 'ingreso'])->name('estudiantes.ingreso');
Route::get('/estudiantes/estado', [App\Http\Controllers\EstudiantesController::class, 'estado'])->name('estudiantes.estado');

Route::get('/administradores/profesores',[App\Http\Controllers\AdministradoresController::class, 'profesores'])->name('administradores.profesores');
Route::get('/administradores/alumnos',[App\Http\Controllers\AdministradoresController::class, 'alumnos'])->name('administradores.alumnos');
Route::get('/administradores/propuestas',[App\Http\Controllers\AdministradoresController::class, 'propuestas_revisadas'])->name('administradores.propuestas_revisadas');



Route::get('/profesores',[App\Http\Controllers\ProfesoresController::class,'propuestas'])->name('profesores.propuestas');