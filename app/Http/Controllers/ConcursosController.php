<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcursosController extends Controller
{
    public function index()
    {
        return view ('v2.concursos.index',[
            'title' => 'Concurso Voy a ganar | Royal Reservations',
            'section' => 'concursos',
            'page' => 'voy-a-ganar',
            'js_v2' => 'js_v2'
        ]);
    }
    public function terminos()
    {
        return view('v2.concursos.terminos',[
            'page' => 'concursos-terminos'
        ]);
    }
}
