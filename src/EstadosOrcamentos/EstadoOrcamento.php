<?php

namespace Alura\DesignPattern\EstadosOrcamentos;

use Alura\DesignPattern\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamente não pode ser finalizado');
    }
}
