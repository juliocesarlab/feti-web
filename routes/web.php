<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', [NewsController::class, 'preview']);
Route::get('/noticias', [NewsController::class, 'listAll']);
Route::get('/noticias/{id}', [NewsController::class, 'fullView']);
Route::get('/noticias/create', [NewsController::class, 'create']);
