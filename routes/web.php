<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\GenericsController;
use App\Http\Controllers\BannersController;

/* generics routes */

Route::get('/', [GenericsController::class, 'index']);

Route::get('/sobre-nos', [GenericsController::class, function() {
  return view('about.index');
}]);

Route::get('/editais', [GenericsController::class, 'edicts']);

Route::get('/contato', function() {
  return view('contact.index');
});



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
Route::get('/dashboard/parceiros/edit/{id}', [PartnersController::class, 'edit'])->middleware(['auth']);
Route::post('/dashboard/parceiros/edit/{id}', [PartnersController::class, 'update'])->middleware(['auth']);
Route::get('/dashboard/parceiros/destroy/{id}', [PartnersController::class, 'destroy'])->middleware(['auth']);

/* Banners dashboard */

Route::get('/dashboard/banners', [BannersController::class, 'index'])->middleware(['auth']);
Route::get('/dashboard/banners/create', [BannersController::class, 'create'])->middleware(['auth']);
Route::post('/dashboard/banners/create', [BannersController::class, 'store'])->middleware(['auth']);
Route::get('/dashboard/banners/edit/{id}', [BannersController::class, 'edit'])->middleware(['auth']);
Route::post('/dashboard/banners/edit/{id}', [BannersController::class, 'update'])->middleware(['auth']);
Route::get('/dashboard/banners/destroy/{id}', [BannersController::class, 'destroy'])->middleware(['auth']);


/* dashboard */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





