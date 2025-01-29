<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = ['dentisti', 'avvocati', 'macellai'];
    return view('welcome', ['services' => $services]);
});

Route::get('/chi-siamo', function () {
    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/servizio/{service}', function ($service) {

    $services = ['dentisti', 'avvocati', 'macellai'];

    foreach ($services as $element) {
        if ($element == $service) {
            return view('servizio', ['service' => $service]);
        }
    }
    abort(404);
});
