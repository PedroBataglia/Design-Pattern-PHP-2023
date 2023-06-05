<?php

namespace Alura\DesignPattern\EstadosOrcamentos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\EstadosOrcamentos\Aprovado;
use Alura\DesignPattern\EstadosOrcamentos\Reprovado;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }

}
