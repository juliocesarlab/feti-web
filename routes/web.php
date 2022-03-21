<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;


Route::get('/', [newsController::class, 'home']);
Route::get('/noticias', [newsController::class, 'listAll']);
