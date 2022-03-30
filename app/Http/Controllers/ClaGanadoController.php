<?php

namespace App\Http\Controllers;

class ClaGanadoController
{
    function index()
    {
        
        return view('ListarGanado');
    }

    function new()
    {
        
        return view('NuevoGanado');
    }

    function edit()
    {
        
        return view('EditarGanado');
    }
}