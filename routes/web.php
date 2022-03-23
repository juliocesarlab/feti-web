<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'preview']);
Route::get('/noticias', [NewsController::class, 'index']);
Route::post('/noticias', [NewsController::class, 'store'])->middleware(['auth']);
Route::get('/noticias/create', [NewsController::class, 'create'])->middleware(['auth']);
Route::get('/noticias/{id}', [NewsController::class, 'getOne']);

Route::get('/dashboard/noticias', [NewsController::class, 'getAll'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



