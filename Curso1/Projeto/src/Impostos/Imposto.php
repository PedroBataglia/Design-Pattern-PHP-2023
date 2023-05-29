<?php

namespace Alura\DisignPattern\Impostos;

use Alura\DisignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
