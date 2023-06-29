<?php

use App\DesignPatterns\Strategy\Models\Airplaine;
use App\DesignPatterns\Strategy\Models\Bus;
use App\DesignPatterns\Strategy\Models\Car;
use App\DesignPatterns\Strategy\Services\TransportadorService;

require_once 'vendor/autoload.php';



// testando banco do brasil
 $transportado = new TransportadorService(new Bus);
 echo $transportado->transportar();
