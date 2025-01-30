<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-siamo', [PageController::class, 'chisiamo']);
Route::get('/servizio/{service}', [PageController::class, 'servizio']);

//Route::get('/i-miei-prodotti', [ProductController::class, 'index']);


Route::get('/contatti', [PageController::class, 'contatti']);
Route::post('/invio-contatto', [PageController::class, 'invia']);
