<?php

use App\Http\Controllers\PlaneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteGroup;
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


Route::prefix('sturia')->group(function () {
    // Ruta para listar todos los aviones
Route::get('/planes', [PlaneController::class, 'index']);

// Ruta para mostrar el formulario de edición de un avión
Route::get('/sturia/plane/edit/{idVuelo}', [PlaneController::class, 'edit'])->name('edit');

// Ruta para actualizar un avión
Route::put('/sturia/update', [PlaneController::class, 'update']);

// Ruta para eliminar un avión
Route::delete('/sturia/plane/delete/{idVuelo}', [PlaneController::class, 'delete'])->name('delete');

});

