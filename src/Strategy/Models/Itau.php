<?php

namespace App\DesignPatterns\Strategy\Models;

use App\DesignPatterns\Strategy\Interfaces\ICalculadoraDeJuros;

class Itau implements ICalculadoraDeJuros
{
    const TAXA_JUROS = 6.8;

    public function calcularJuros($montante)
    {        
        $montante += $montante * (self::TAXA_JUROS / 100);

        return "Itau : " . $montante;
    }

}
