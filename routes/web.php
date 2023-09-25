<?php

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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::post('guardar', [ClientesController::class,'store'])->name('guardar') ;

Route::get('consulta', [ClientesController::class,'index'])->name('consulta') ;

Route::get('actualizar{id}', [ClientesController::class,'editar'])->name('actualizar');
 
Route::post('update{cliente}', [ClientesController::class,'update'])->name('update') ;

Route::delete('eliminar{id}', [ClientesController::class,'delete'])->name('eliminar');

Route::get('/cartas', function () {
    return view('cartas');
});
/* poner el ROUTE POST */

Route::get('/mesas', function () {
    return view('mesas');
});
/* poner el ROUTE POST */

Route::get('/ordenes', function () {
    return view('ordenes');
});
/* poner el ROUTE POST */

Route::get('/personal', function () {
    return view('personaal');
});
/* poner el ROUTE POST */