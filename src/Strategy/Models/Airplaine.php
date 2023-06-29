<?php

namespace App\DesignPatterns\Strategy\Models;

use App\DesignPatterns\Strategy\Interfaces\ITransportToAirport;

class Airplaine implements ITransportToAirport
{
    public function transport()
    {
        return "Vamos de Airplaine";
    }
    
}
