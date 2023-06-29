<?php

namespace App\DesignPatterns\Strategy\Services;

use App\DesignPatterns\Strategy\Interfaces\ICalculadoraDeJuros;
use App\DesignPatterns\Strategy\Interfaces\ITransportToAirport;

class TransportadorService 
{
    private ITransportToAirport $transport;
    // primeiro setar o meio de transporte
    // dependa de abstrações n não de implementacao

    public function __construct(ITransportToAirport $transport) 
    {
        $this->transport = $transport;
    }

    public function transportar() {
        return $this->transport->transport();
    }


}