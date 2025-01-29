<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $services = ['dentisti', 'avvocati', 'macellai'];
        return view('welcome', ['services' => $services]);
    }

    public function chisiamo()
    {
        return view('chisiamo');
    }
    public function contatti()
    {
        return view('contatti');
    }
    public function servizio($service)
    {

        $services = ['dentisti', 'avvocati', 'macellai'];

        foreach ($services as $element) {
            if ($element == $service) {
                return view('servizio', ['service' => $service]);
            }
        }
        abort(404);
    }
}
