<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'preview']);
Route::get('/noticias', [NewsController::class, 'listAll']);
Route::post('/noticias', [NewsController::class, 'create']);
Route::get('/noticias/create', [NewsController::class, 'createForm'])->middleware(['auth']);
Route::get('/noticias/{id}', [NewsController::class, 'getOne']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/noticias', function () {
  return view('news-dashboard');
});

require __DIR__.'/auth.php';
