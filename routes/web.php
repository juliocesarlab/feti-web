<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', [NewsController::class, 'preview']);
Route::get('/noticias', [NewsController::class, 'listAll']);
Route::post('/noticias', [NewsController::class, 'create']);
Route::get('/noticias/create', [NewsController::class, 'createForm']);
Route::get('/noticias/{id}', [NewsController::class, 'fullView']);