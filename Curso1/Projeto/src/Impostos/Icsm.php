<?php

namespace Alura\DisignPattern\Impostos;

use Alura\DisignPattern\Orcamento;

class Icsm implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
