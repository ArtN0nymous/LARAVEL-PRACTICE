<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paisController;
use App\Http\Controllers\personaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pag1', function () {
    return view('pagina1',['nombre'=>"Fulanito","apellido"=>"Jja"]);
});
Route::get('/registroPais', function () {
    return view('formulario_pais');
});
Route::get('/registroPersona',[paisController::class,'mostrar_pk'])->name('pais.mostrar_pk');
Route::post('/persona/guardar',[personaController::class,'insertar'])->name('persona.insertar');

Route::post('/pais/guardar',[paisController::class,'insertar'])->name('pais.insertar');
Route::get('/paises',[paisController::class,'mostrar'])->name('pais.mostrar');
Route::delete('/pais/eliminar/{pk_pais}',[paisController::class,'eliminar'])->name('pais.eliminar');

Route::get('/pais/editar/{pk_pais}',[paisController::class,'editar'])->name('pais.editar');
Route::get('/persona/editar/{id}',[personaController::class,'editar'])->name('persona.editar');
Route::delete('/persona/eliminar/{id}',[personaController::class,'eliminar'])->name('persona.eliminar');

Route::put('/pais/actualizar/{pk_pais}',[paisController::class,'actualizar'])->name('pais.actualizar');
Route::put('/persona/actualizar/{id}',[personaController::class,'actualizar'])->name('persona.actualizar');

Route::get('/personas',[personaController::class,'mostrar'])->name('persona.mostrar');