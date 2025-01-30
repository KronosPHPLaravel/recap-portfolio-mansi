<?php

namespace App\Http\Controllers;

use App\Mail\ContactSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function invia(Request $request)
    {
        //mapping dei dati 
        $data = [
            'nome' => $request->name,
            'email' => $request->input('email'),
            'message' => $request->input('message', 'No Comment'),
        ];

        Mail::to($request->input('email'))->send(new ContactSend($data));

        dd('Tutto ok');
    }
}
