<?php

require __DIR__ . '/../vendor/autoload.php';

$request = new App\Http\Request;

$request->send();

$objGanado = new App\Http\ClaGanado;
$objGanado->mostrar();