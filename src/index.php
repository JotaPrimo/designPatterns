<?php

require_once 'vendor/autoload.php';

use App\DesignPatterns\Strategy\Models\BancoBrasil;
use App\DesignPatterns\Strategy\Models\Itau;
use App\DesignPatterns\Strategy\Models\Santander;
use App\DesignPatterns\Strategy\Services\CalculadoraJurosService;

// testando banco do brasil
 $calculadora = new CalculadoraJurosService(new BancoBrasil, 100);
 echo $calculadora->calcular();
