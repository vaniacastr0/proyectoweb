<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PropuestaController;

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

Route::post('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/estudiantes/ingreso', [App\Http\Controllers\EstudiantesController::class, 'ingreso'])->name('estudiantes.ingreso');
Route::get('/estudiantes/estado/{propuesta}', [App\Http\Controllers\EstudiantesController::class, 'ver_estado'])->name('estudiantes.ver_estado');
Route::get('/estudiantes/lista', [App\Http\Controllers\EstudiantesController::class, 'lista_estado'])->name('estudiantes.lista_estado');
Route::post('/estudiante/ingreso/propuesta',[App\Http\Controllers\RegistroController::class, 'store_propuesta'])->name('estudiantes.store_propuesta');

Route::get('/administradores/profesores',[App\Http\Controllers\AdministradoresController::class, 'profesores'])->name('administradores.profesores');
Route::post('/administradores/profesores',[App\Http\Controllers\AdministradoresController::class, 'store_profesor'])->name('administradores.store_profesor');
Route::get('/administradores/profesores/create',[App\Http\Controllers\AdministradoresController::class, 'create_profesor'])->name('administradores.create_profesor');
Route::delete('/administradores/profesores/{profesor}',[App\Http\Controllers\AdministradoresController::class, 'destroy_profesor'])->name('administradores.destroy_profesor');

Route::get('/administradores/alumnos',[App\Http\Controllers\AdministradoresController::class, 'alumnos'])->name('administradores.alumnos');
Route::get('/administradores/alumnos/edit/{propuesta}',[App\Http\Controllers\AdministradoresController::class, 'edit'])->name('administradores.edit');
Route::get('/administradores/alumnos/create',[App\Http\Controllers\AdministradoresController::class, 'create_estudiante'])->name('administradores.create_estudiante');
Route::delete('/administradores/estudiantes/{estudiante}',[App\Http\Controllers\AdministradoresController::class, 'destroy_estudiante'])->name('administradores.destroy_estudiante');
Route::post('/administradores/estudiantes',[App\Http\Controllers\AdministradoresController::class, 'store_estudiante'])->name('administradores.store_estudiante');

Route::get('/administradores',[App\Http\Controllers\AdministradoresController::class, 'propuestas_revisadas'])->name('administradores.propuestas_revisadas');



Route::get('/profesores',[App\Http\Controllers\ProfesoresController::class,'propuestas'])->name('profesores.propuestas');
Route::get('/profesores/edit/{propuesta}',[App\Http\Controllers\ProfesoresController::class,'edit'])->name('profesores.edit');
Route::get('/profesores/create',[App\Http\Controllers\ProfesoresController::class,'create'])->name('profesores.create');
Route::get('/profesores/delete',[App\Http\Controllers\ProfesoresController::class,'delete'])->name('profesores.delete');