<?php

use App\Http\Controllers\BookController;
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
    return view('main');
});

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class,'index'])->name('index');
    Route::get('create', [BookController::class,'create'])->name('create');
    Route::get('/{id}', [BookController::class,'show'])->name('show');
    Route::post('/', [BookController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BookController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('update');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('destroy');
});



