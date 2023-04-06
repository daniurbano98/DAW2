<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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
    return view('main');
});

//LOGIN
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);

//REGISTER
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'register']);

//LOGOUT
Route::post('/logout',[LogoutController::class,'store'])->name('logout');




Route::prefix('events')->group(function () {
    Route::post('register',[EventController::class,'register'])->name('events.register'); //form para registrar un nuevo asistente al evento
    Route::get('{user:name}', [EventController::class,'index'])->name('events.index');
    Route::get('create', [EventController::class,'create'])->name('createEvent');
    Route::get('/{id}', [EventController::class,'show'])->name('show'); //muestra un evento especifico
    Route::post('/store', [EventController::class, 'store'])->name('storeEvent');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('editEvent');
    Route::put('/update/{id}', [EventController::class, 'update'])->name('updateEvent');
    Route::delete('/destroy/{id}', [EventController::class, 'destroy'])->name('destroyEvent');    
});
