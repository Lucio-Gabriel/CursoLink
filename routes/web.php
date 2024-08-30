<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);
Route::get('/cursos', [SiteController::class, 'cursos']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contatos', [SiteController::class, 'contatos']);
