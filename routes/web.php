<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\GenericsController;

Route::get('/', [GenericsController::class, 'index']);

/* news dashboard */

Route::get('/noticias', [NewsController::class, 'index']);
Route::get('/dashboard/noticias', [NewsController::class, 'getAll'])->middleware(['auth']);
Route::post('/dashboard/noticias', [NewsController::class, 'store'])->middleware(['auth']);
Route::get('/dashboard/noticias/create', [NewsController::class, 'create'])->middleware(['auth']);
Route::get('/dashboard/noticias/edit/{id}', [NewsController::class, 'edit'])->middleware(['auth']);
Route::post('/dashboard/noticias/edit/{id}', [NewsController::class, 'update'])->middleware(['auth']);
Route::get('/dashboard/noticias/destroy/{id}', [NewsController::class, 'destroy'])->middleware(['auth']);
Route::get('/noticias/{id}', [NewsController::class, 'getOne']);


/* partners dashboard */

Route::get('/dashboard/parceiros', [PartnersController::class, 'index'])->middleware(['auth']);
Route::get('/dashboard/parceiros/create', [PartnersController::class, 'create'])->middleware(['auth']);
Route::post('/dashboard/parceiros/create', [PartnersController::class, 'store'])->middleware(['auth']);


/* dashboard */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





