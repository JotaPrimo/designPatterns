<?php

namespace App\DesignPatterns\Strategy\Services;

use App\DesignPatterns\Strategy\Interfaces\ICalculadoraDeJuros;

class CalculadoraJurosService
{

    private ICalculadoraDeJuros $calculator;
    private $montante;

    public function __construct(ICalculadoraDeJuros $banco, $montante)
    {
        $this->calculator = $banco;
        $this->montante = $montante;
    }

    public function calcular()
    {
        return $this->calculator->calcularJuros($this->montante);
    }

}
