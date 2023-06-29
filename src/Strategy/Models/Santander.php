<?php

namespace App\DesignPatterns\Strategy\Models;

use App\DesignPatterns\Strategy\Interfaces\ICalculadoraDeJuros;

class Santander implements ICalculadoraDeJuros
{

    const TAXA_JUROS = 7.8;

    public function calcularJuros($montante)
    {
        $montante += $montante * (self::TAXA_JUROS / 100);

        return "Itau : " . $montante;
    }

}