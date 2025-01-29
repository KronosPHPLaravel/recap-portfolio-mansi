<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-siamo', [PageController::class, 'chisiamo']);
Route::get('/contatti', [PageController::class, 'contatti']);
Route::get('/servizio/{service}', [PageController::class, 'servizio']);
