<?php

namespace App\DesignPatterns\Strategy\Models;

use App\DesignPatterns\Strategy\Interfaces\ITransportToAirport;

class Bus implements ITransportToAirport
{
    public function transport() {
        return "Vamos de BUS" . PHP_EOL;
    }

}
